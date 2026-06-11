<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-wrench-screwdriver';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('category')
                    ->options([
                        'infrastructure' => 'Network & Infrastructure',
                        'application' => 'Security Solutions',
                        'service' => 'Service Solution',
                        'non-erp' => 'Advanced Application',
                        'electronic-security' => 'Electronic Security',
                    ])
                    ->required(),
                Forms\Components\TextInput::make('title_en')
                    ->required()
                    ->maxLength(255)
                    ->label('Title (EN)'),
                Forms\Components\TextInput::make('title_id')
                    ->required()
                    ->maxLength(255)
                    ->label('Title (ID)'),
                Forms\Components\Textarea::make('description_en')
                    ->required()
                    ->rows(4)
                    ->label('Description (EN)'),
                Forms\Components\Textarea::make('description_id')
                    ->required()
                    ->rows(4)
                    ->label('Description (ID)'),
                Forms\Components\TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
                Forms\Components\Toggle::make('is_active')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('category')
                    ->badge()
                    ->color(fn ($state) => match ($state) {
                        'infrastructure' => 'info',
                        'application' => 'warning',
                        'service' => 'success',
                        'non-erp' => 'danger',
                        'electronic-security' => 'gray',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('title_en')
                    ->searchable()
                    ->limit(50)
                    ->label('Title (EN)'),
                Tables\Columns\TextColumn::make('sort_order')
                    ->sortable(),
                Tables\Columns\ToggleColumn::make('is_active'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->options([
                        'infrastructure' => 'Network & Infrastructure',
                        'application' => 'Security Solutions',
                        'service' => 'Service Solution',
                        'non-erp' => 'Advanced Application',
                        'electronic-security' => 'Electronic Security',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }
}
