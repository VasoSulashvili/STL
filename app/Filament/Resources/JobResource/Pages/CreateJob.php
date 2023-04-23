<?php

namespace App\Filament\Resources\JobResource\Pages;

use App\Filament\Resources\JobResource;
use App\Models\Job;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateJob extends CreateRecord
{
    protected static string $resource = JobResource::class;

    public Job $job;

    protected function getFormModel(): Job 
    {
        return $this->job;
    } 

    // Costumization
    protected function handleRecordCreation(array $data): Model
    {
        $job = new Job();
        $job->setTranslations('name', $data['name']);
        $job->active = $data['active'] ? $data['active'] : 0;
        $job->save();

        return $job;
        // return static::getModel()::create($data);
    }
}
