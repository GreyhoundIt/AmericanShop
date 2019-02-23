<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category([
            'id' => '1',
            'name' => 'Drinks',
            'description' => 'Drinks.'
        ]);
        $category->save();

        $category = new Category([
            'id' => '2',
            'name' => 'Foods',
            'description' => 'Foods.'
        ]);
        $category->save();
    }
}
