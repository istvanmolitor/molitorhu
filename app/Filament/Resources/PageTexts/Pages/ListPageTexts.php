<?php

namespace App\Filament\Resources\PageTexts\Pages;

use App\Filament\Resources\PageTexts\PageTextResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPageTexts extends ListRecords
{
    protected static string $resource = PageTextResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
