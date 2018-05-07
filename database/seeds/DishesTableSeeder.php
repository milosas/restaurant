<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Dish;

class DishesTableSeeder extends Seeder
{
  protected $dish;
  protected $faker;
  public function __construct(Dish $dish,Faker $faker){
  $this->dish = $dish;
  $this->faker = $faker;
}
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = $this->faker->create();

    foreach (range(1,10) as $key) {
      $this->dish->create([
     'title' => $faker->word(),
     'description' => $faker->text($maxNnCahrs = 200),
     'image_url' => $faker->imageUrl(400,400,'food'),
     'price' => $faker->buildingNumber(),
     'main_id' =>rand(1,4),

   ]);
    }
    }
}
