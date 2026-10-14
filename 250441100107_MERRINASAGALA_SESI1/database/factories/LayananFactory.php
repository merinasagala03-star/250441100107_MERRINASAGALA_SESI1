<?php

namespace Database\Factories;

use App\Models\Layanan;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Layanan>
 */
class LayananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_layanan'-> fake()->unique()->randomElement(
                'LK-001',
                'LK-002',
                'LK-003',
                'LK-004',
            ),
            'nama_layanan'->fake()->randomElement(
                'Cuci_kering',
                'cuci_setrika',
                'Bad Cover',
                'Jas'
            ),
            
            'jenis'->fake()->randomElement(
                'kiloan',
                'satuan',
            ),

            'tarif_per_satuan'->fake()->randomElement(
                'cuci_kering = Rp.6000',
                'cuci_setrika=Rp.6000',
            )
        ];
    }
}
