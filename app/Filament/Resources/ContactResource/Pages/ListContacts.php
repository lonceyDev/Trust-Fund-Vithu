<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Models\User;
use Filament\Actions;

use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\ContactResource;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
      //  Actions\CreateAction::make(),
       
           
         
        ];
    }
    
  
  
}
