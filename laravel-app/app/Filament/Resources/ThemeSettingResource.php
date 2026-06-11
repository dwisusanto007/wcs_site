<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ThemeSettingResource\Pages;
use App\Models\ThemeSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class ThemeSettingResource extends Resource
{
    protected static ?string $model = ThemeSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-paint-brush';

    protected static ?string $navigationLabel = 'Theme Colors';

    protected static ?int $navigationSort = 98;

    public static function canCreate(): bool
    {
        return false;
    }

    public static function canDelete($record): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('group')
                    ->disabled()
                    ->label('Section'),
                Forms\Components\TextInput::make('key')
                    ->disabled()
                    ->label('Property'),
                Forms\Components\TextInput::make('label')
                    ->disabled()
                    ->label('Description'),
                Forms\Components\ColorPicker::make('value')
                    ->required()
                    ->label('Color'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('group')
            ->defaultGroup('group')
            ->columns([
                Tables\Columns\TextColumn::make('group')
                    ->badge()
                    ->color(fn ($state) => match ($state) {
                        'global' => 'primary',
                        'hero' => 'info',
                        'tabs' => 'success',
                        'footer' => 'warning',
                        'header' => 'gray',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('label')
                    ->label('Setting'),
                Tables\Columns\TextColumn::make('key')
                    ->label('Property'),
                Tables\Columns\ColorColumn::make('value')
                    ->label('Color'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('group')
                    ->options([
                        'global' => 'Global',
                        'hero' => 'Hero Section',
                        'tabs' => 'Tabs Section',
                        'footer' => 'Footer',
                        'header' => 'Header',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListThemeSettings::route('/'),
            'edit' => Pages\EditThemeSetting::route('/{record}/edit'),
        ];
    }
}
