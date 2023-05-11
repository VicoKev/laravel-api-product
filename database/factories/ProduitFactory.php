<?php

namespace Database\Factories;



use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;
use App\Models\Produit;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    protected $model = Produit::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->word,
            'description' => $this->faker->paragraph,
            'lien_image' => 'https://picsum.photos/200/300',
            'prix' => $this->faker->randomFloat(2, 10, 100),
            'tva' => 0.20,
        ];
    }
}
