<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Models\User;
use Filament\Actions;

use Filament\Resources\Pages\ListRecords;
use Filament\Notifications\Actions\Action;
use App\Filament\Resources\ContactResource;
use Illuminate\Support\Facades\Notification;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    
    {
        return [
      //  Actions\CreateAction::make(),
       
      
         
        ];
    }
    // protected function beforeSave(): void
    //     {
    //         Notification::make()
    //               ->title('New Contact Message Received')
    //               ->sendToDatabase(\auth()->user());
    //     }
   
  
  
}
