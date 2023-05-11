<?php

namespace Database\Factories;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commande>
 */
class CommandeFactory extends Factory
{
    protected $model = Commande::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_client' => rand(1,50),
            'id_produit' => rand(1,50),
            'quantite' => $this->faker->numberBetween(1,100),
            'date' => $this->faker->dateTimeBetween('-1 year', 'now')
        ];
    }
}
