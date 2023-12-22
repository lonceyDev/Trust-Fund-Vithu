<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Support\Enums\MaxWidth;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;
    public function getMaxContentWidth(): MaxWidth
    {
        return MaxWidth::Full;
    }
    protected function getRedirectUrl():string
    {
        return $this->getResource()::getUrl('index');
    }
}
