<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categories;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $a = new Categories;
        $a->category_name="Maths";
        $a->save();
        $a = new Categories;
        $a->category_name="English";
        $a->save();
        $a = new Categories;
        $a->category_name="Geography";
        $a->save();
        $a = new Categories;
        $a->category_name="History";
        $a->save();
        $a = new Categories;
        $a->category_name="Physics";
        $a->save();
        $a = new Categories;
        $a->category_name="Chemistry";
        $a->save();
        $a = new Categories;
        $a->category_name="Biology";
        $a->save();

    }
}
