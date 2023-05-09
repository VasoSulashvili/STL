<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    
    protected $data = [
        [
            'icon' => '10.png',
            'title' => [
                'ka' => 'სემინარები',
                'en' => 'Seminars'
            ],
            'description' => [
                'ka' => 'short description',
                'en' => 'short description',
            ],
            'text' => [
                'ka' => 'short description',
                'en' => 'short description',
            ],
            'active' => 1
        ],
        [
            'icon' => '2.png',
            'title' => [
                'ka' => 'ვიზიტი პედიატრთან',
                'en' => 'visit to a pediatrician'
            ],
            'description' => [
                'ka' => 'short description',
                'en' => 'short description',
            ],
            'text' => [
                'ka' => 'short description',
                'en' => 'short description',
            ],
            'active' => 1
        ],
        [
            'icon' => '8.png',
            'title' => [
                'ka' => 'ვიზიტი ნეონატოლოგთან',
                'en' => 'visit to a neonatologist'
            ],
            'description' => [
                'ka' => 'short description',
                'en' => 'short description',
            ],
            'text' => [
                'ka' => 'short description',
                'en' => 'short description',
            ],
            'active' => 1
        ],
        [
            'icon' => '11.png',
            'title' => [
                'ka' => 'ონლაინ კონსულტაცია',
                'en' => 'online consultacion'
            ],
            'description' => [
                'ka' => 'short description',
                'en' => 'short description',
            ],
            'text' => [
                'ka' => 'short description',
                'en' => 'short description',
            ],
            'active' => 1
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // - სემინარები
        // - ვიზიტი პედიატრთან
        // - ვიზიტი ნეონატოლოგთან
        // - ონლაინ კონსულტაცია
        foreach($this->data as $item)
        {
            $service = new Service;
            $service->icon = $item['icon'];
            $service->title = $item['title'];
            $service->description = $item['description'];
            $service->text = $item['text'];
            $service->save();
        }
    }
}
