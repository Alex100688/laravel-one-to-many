<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $type = Type::inRandomOrder()->first();
            $new_project = new Project();
            $new_project->title = $faker->sentence(4);
            $new_project->description = $faker->paragraph(2);
            $new_project->name_client = $faker->name(2);
            $new_project->slug = Str::slug($new_project -> title);
            $new_project->type_id = $type -> id;
            $new_project->save();
        }
    }
}
