<?php

namespace App\Filament\Resources\Experiences\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ExperienceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('role')
                    ->label('Pozíció (HU)')
                    ->required(),
                TextInput::make('role_en')
                    ->label('Pozíció (EN)'),
                TextInput::make('company')
                    ->label('Cég (HU)')
                    ->required(),
                TextInput::make('company_en')
                    ->label('Cég (EN)'),
                TextInput::make('started_year')
                    ->label('Tól')
                    ->numeric()
                    ->required(),
                TextInput::make('ended_year')
                    ->label('Ig')
                    ->numeric()
                    ->helperText('Üresen hagyva: jelenleg.'),
                Textarea::make('description')
                    ->label('Leírás (HU)')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('description_en')
                    ->label('Leírás (EN)')
                    ->columnSpanFull(),
                Select::make('skills')
                    ->relationship('skills', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable()
                    ->columnSpanFull(),
            ]);
    }
}
