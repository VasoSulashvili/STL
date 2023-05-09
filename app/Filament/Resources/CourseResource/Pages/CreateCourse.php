<?php

namespace App\Filament\Resources\CourseResource\Pages;

use App\Filament\Resources\CourseResource;
use App\Models\Course;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateCourse extends CreateRecord
{
    protected static string $resource = CourseResource::class;

    // Costumization
    protected function handleRecordCreation(array $data): Model
    {
        $course = new Course();
        $course->image_thumb = $data['image_thumb'];
        $course->image = $data['image'];
        $course->duration = $data['duration'];
        $course->visits = $data['visits'];
        $course->active = $data['active'] ? $data['active'] : 0;
        $course->setTranslations('title', $data['title']);
        $course->setTranslations('intro', $data['intro']);
        $course->setTranslations('description', $data['description']);
        $course->save();

        return $course;
        // return static::getModel()::create($data);
    }
}
