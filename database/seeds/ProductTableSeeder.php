<?php

use App\Product;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $product = new Product([
            'category_id' => 1,
            'name' => 'Goose Island',
            'description' => 'Not too much carbonation, the natural flavors come through quite well. Heavy, full bodied, and not watery at all. A very pleasant mouthfeel, smooth and not hard to drink at all.',
            'price' => '200',
            'imageurl' => '/img/goose_island.jpg',
            'slug' => 'goose_island',
            'part_number' =>$faker->numberBetween(1000,9999)
        ]);
        $product->save();

        $product = new Product([
            'category_id' => 1,
            'name' => 'Hanks',
            'description' => 'Overall is very soft, a perfect blend of tingle and flavor. The spices combine well with there carbonation. A very well blended full body.',
            'price' => '250',
            'imageurl' => '/img/hanks.jpg',
            'slug' => 'hanks',
            'part_number' =>$faker->numberBetween(1000,9999)
        ]);
        $product->save();

        $product = new Product([
            'category_id' => 1,
            'name' => 'Margos Dark',
            'description' => 'The carbonation is a good balance of tingle and excitement, but also steps back to let this great list of flavors come through. The nutmeg and wintergreen are well voiced together in this brew and bring about an uncommon mixture of freshness and sweet warmth.',
            'price' => '300',
            'imageurl' => '/img/margos.jpg',
            'slug' => 'margos_dark',
            'part_number' =>$faker->numberBetween(1000,9999)
        ]);
        $product->save();

        $product = new Product([
            'category_id' => 1,
            'name' => 'Red Arrow',
            'description' => 'A very full body with a strong punch of carbonation and wintergreen. The licorice comes through pretty strong through the body making it very dark, I may be just quite thirsty, but this brew is quite refreshing.',
            'price' => '200',
            'imageurl' => '/img/red.jpg',
            'slug' => 'red_arrow',
            'part_number' =>$faker->numberBetween(1000,9999)
        ]);
        $product->save();

        $product = new Product([
            'category_id' => 1,
            'name' => 'Rocket Fizz Float',
            'description' => 'Surprisingly, this is a fairly weak bodied brew  the spices are nice and flavorful, but lacks that special something. Positioned as a "root beer float" I would have liked more creaminess and some vanilla.',
            'price' => '180',
            'imageurl' => '/img/rocket.jpeg',
            'slug' => 'rocket_fizz_float',
            'part_number' =>$faker->numberBetween(1000,9999)
        ]);
        $product->save();

        $product = new Product([
            'category_id' => 1,
            'name' => 'Abita',
            'description' => 'The body has sharp tastes of root beer spices, but is not sweet or very exciting due to the lack of honey or vanilla which could bring about a bit more creaminess.',
            'price' => '280',
            'imageurl' => '/img/abita.jpg',
            'slug' => 'abita',
            'part_number' =>$faker->numberBetween(1000,9999)
        ]);
        $product->save();

        $product = new Product([
            'category_id' => 1,
            'name' => 'Bulldog',
            'description' => 'The body is a wonderful combination of delicate flavors. The honey and vanilla work together to bring about a real sweetness within the root spices. I like cane sugar much better than high fructose corn syrup, it has a different mouth feel, but is mostly evidenced in the lack oh a too-heavy aftertaste.',
            'price' => '275',
            'imageurl' => '/img/bulldog.jpeg',
            'slug' => 'bulldog',
            'part_number' =>$faker->numberBetween(1000,9999)
        ]);
        $product->save();

        $product = new Product([
            'category_id' => 1,
            'name' => 'Firemans Brew',
            'description' => 'Not too much carbonation, the natural flavors come through quite well. Heavy, full bodied, and not watery at all. A very pleasant mouthfeel, smooth and not hard to drink.',
            'price' => '400',
            'imageurl' => '/img/fireman-brew.png',
            'slug' => 'firemans_brew',
            'part_number' =>$faker->numberBetween(1000,9999)
        ]);
        $product->save();

    }
}
