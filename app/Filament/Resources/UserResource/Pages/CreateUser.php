<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\User;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    public User $user;

    protected function getFormModel(): User 
    {
        return $this->user;
    } 

    // Costumization
    protected function handleRecordCreation(array $data): Model
    {
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->assignRole('admin');
        $user->save();

        return $user;
    }
}
