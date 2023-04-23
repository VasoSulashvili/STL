<?php

namespace Database\Seeders;

use App\Models\Job;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    private $jobs = [
        ['ka' => 'გუნდი', 'en' => 'Team'],
        ['ka' => 'ინსტრუქტორი', 'en' => 'Instructor']
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->jobs as $job)
        {
            $model = new Job();
            $model->setTranslations('name', $job);
            $model->active = 1;
            $model->save();
        }
    }
}
