<?php

namespace App\Filament\Resources\PageTexts\Pages;

use App\Filament\Resources\PageTexts\PageTextResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPageText extends EditRecord
{
    protected static string $resource = PageTextResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
