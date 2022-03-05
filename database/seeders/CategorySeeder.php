<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['Career', 'Self Development', 'Work', 'Leadership', 'Health', 'Family', 'Relationships', 'Finance', 'Hobbies', 'Travel', 'Education', 'Spirituality'];

        foreach($categories as $item) {
            \App\Models\Category::create([
                'name' => $item
            ]);
        }

    }
}
