<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Models\User;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\ContactResource;


class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
        //    Actions\EditAction::make(),
         
      
        ];

    }
    // protected function beforeSave(): void
    // {
    //     Notification::make()
    //           ->title('New Contact Message Received')
    //           ->sendToDatabase(\auth()->user());
    // }

}
