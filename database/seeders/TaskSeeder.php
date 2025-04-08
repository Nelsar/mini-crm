<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        // Создаем 20 задач со случайными данными
        Task::factory()->count(20)->create();
        
        // Создаем по 5 задач каждого статуса для наглядности
        Task::factory()->count(5)->new()->create();
        Task::factory()->count(5)->inProgress()->create();
        Task::factory()->count(5)->completed()->create();
    }
}