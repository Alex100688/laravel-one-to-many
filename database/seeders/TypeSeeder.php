<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $types = ['frontend', 'backend', 'system', 'graphic_design','3D_artist'];

        foreach($types as $type){
            $new_type = new Type();
            $new_type -> name = $type;
            $new_type -> content = $faker->paragraph(2);
            $new_type -> slug = Str::slug($new_type->name);
            $new_type -> save();
        }
    }
}
