<?php

namespace App\Filament\Resources\Educations\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class EducationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('degree')
                    ->label('Végzettség (HU)')
                    ->required(),
                TextInput::make('degree_en')
                    ->label('Végzettség (EN)'),
                TextInput::make('school')
                    ->label('Intézmény (HU)')
                    ->required(),
                TextInput::make('school_en')
                    ->label('Intézmény (EN)'),
                TextInput::make('started_year')
                    ->label('Tól')
                    ->numeric()
                    ->required(),
                TextInput::make('ended_year')
                    ->label('Ig')
                    ->numeric()
                    ->helperText('Üresen hagyva: folyamatban.'),
            ]);
    }
}
