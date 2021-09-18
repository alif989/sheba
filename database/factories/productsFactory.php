<?php

namespace Database\Factories;

use App\Models\products;
use Illuminate\Database\Eloquent\Factories\Factory;

class productsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = products::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'name' => $this->faker->words($nb = 6, $asText = false),
            'available_qty' => $this->faker->numberBetween(1,10),
            'total_qty' => $this->faker->numberBetween(1,20),
            'sales_qty' => $this->faker->numberBetween(1,5),
            'purchase_price' => $this->faker->randomFloat(4,0,21),
            'sales_price' => $this->faker->randomFloat(4,0,21),
            'product_img_url' => 'asset/img',
            'created_at' => $this->faker->dateTimeBetween('-2 hour', 'now')
        ];
    }
}
