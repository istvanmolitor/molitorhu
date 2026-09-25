<?php

namespace App\Filament\Resources\PageTexts\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PageTextForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('key')
                    ->required()
                    ->unique(ignoreRecord: true),
                Textarea::make('value')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
