<?php

namespace Obelaw\Accounting\Filament\Resources\PriceListResource;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Obelaw\Accounting\Filament\Resources\PriceListResource;

class ListPricelist extends ListRecords
{
    protected static string $resource = PriceListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
