<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {

    	//factory(Product::class, 50)->create();
      for ($i=0; $i < 40; $i++) {
      DB::table('products')->insert([
            'name' => $faker->sentence(),
            'short' => $faker->text(140),
            'description' => $faker->text(600)
        ]);
    }

    }
}
