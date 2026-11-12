<?php

namespace Welman91\ApiService\Resources\TokenResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Welman91\ApiService\Resources\TokenResource;

class ListTokens extends ListRecords
{
    protected static string $resource = TokenResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
