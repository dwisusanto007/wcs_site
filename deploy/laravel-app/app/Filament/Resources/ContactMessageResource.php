<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactMessageResource\Pages;
use App\Models\ContactMessage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ContactMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;

    protected static ?string $navigationIcon = 'heroicon-o-envelope';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('full_name')->disabled(),
                Forms\Components\TextInput::make('email')->disabled(),
                Forms\Components\TextInput::make('phone_number')->disabled(),
                Forms\Components\TextInput::make('company_name')->disabled(),
                Forms\Components\TextInput::make('product_interest')->disabled(),
                Forms\Components\Textarea::make('message')->disabled()->rows(4),
                Forms\Components\Toggle::make('privacy_accepted')->disabled(),
                Forms\Components\TextInput::make('locale')->disabled(),
                Forms\Components\TextInput::make('created_at')->disabled(),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make('Contact Details')
                    ->schema([
                        Infolists\Components\TextEntry::make('full_name'),
                        Infolists\Components\TextEntry::make('email'),
                        Infolists\Components\TextEntry::make('phone_number'),
                        Infolists\Components\TextEntry::make('company_name')
                            ->default('-'),
                        Infolists\Components\TextEntry::make('product_interest')
                            ->badge(),
                        Infolists\Components\TextEntry::make('message')
                            ->columnSpanFull(),
                        Infolists\Components\IconEntry::make('privacy_accepted')
                            ->boolean(),
                        Infolists\Components\TextEntry::make('locale')
                            ->badge()
                            ->color(fn ($state) => $state === 'id' ? 'warning' : 'info'),
                        Infolists\Components\TextEntry::make('created_at')
                            ->dateTime(),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('company_name')
                    ->default('-'),
                Tables\Columns\TextColumn::make('product_interest')
                    ->badge(),
                Tables\Columns\TextColumn::make('locale')
                    ->badge()
                    ->color(fn ($state) => $state === 'id' ? 'warning' : 'info'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('product_interest')
                    ->options([
                        'infrastructure' => 'Network & Infrastructure',
                        'application' => 'Security Solutions',
                        'service' => 'Service Solution',
                        'non-erp' => 'Advanced Application',
                        'electronic-security' => 'Electronic Security',
                    ]),
                Tables\Filters\SelectFilter::make('locale')
                    ->options([
                        'en' => 'English',
                        'id' => 'Bahasa Indonesia',
                    ]),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->headerActions([
                Tables\Actions\Action::make('export')
                    ->label('Export CSV')
                    ->icon('heroicon-o-arrow-down-tray')
                    ->action(function () {
                        return response()->streamDownload(function () {
                            $handle = fopen('php://output', 'w');

                            fputcsv($handle, [
                                'Full Name',
                                'Email',
                                'Phone Number',
                                'Company Name',
                                'Product Interest',
                                'Message',
                                'Privacy Accepted',
                                'Locale',
                                'Created At',
                            ]);

                            ContactMessage::query()
                                ->latest()
                                ->each(function ($message) use ($handle) {
                                    fputcsv($handle, [
                                        $message->full_name,
                                        $message->email,
                                        $message->phone_number,
                                        $message->company_name ?? '',
                                        $message->product_interest,
                                        $message->message ?? '',
                                        $message->privacy_accepted ? 'Yes' : 'No',
                                        $message->locale,
                                        $message->created_at?->toDateTimeString(),
                                    ]);
                                });

                            fclose($handle);
                        }, 'contact-messages-' . now()->format('Y-m-d') . '.csv');
                    }),
            ])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactMessages::route('/'),
            'view' => Pages\ViewContactMessage::route('/{record}'),
        ];
    }
}
