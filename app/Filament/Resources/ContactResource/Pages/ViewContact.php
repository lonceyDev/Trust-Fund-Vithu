<?php

namespace App\Filament\Resources\ContactResource\Pages;

use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\ContactResource;
use Filament\Notifications\Events\DatabaseNotificationsSent;

class ViewContact extends ViewRecord
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
           // Actions\EditAction::make(),
        //    Notification::make()
        //    ->title('New Contact Message Received')
        //    ->sendToDatabase(\auth()->user())
      
        ];

    }
    protected function beforefill(): void
    {
        $recipient = auth()->user();
 
        Notification::make()
            ->title('Saved successfully')
            ->sendToDatabase($recipient);
        
        event(new DatabaseNotificationsSent($recipient));
    }
}
