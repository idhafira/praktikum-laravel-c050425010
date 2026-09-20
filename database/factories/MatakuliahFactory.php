<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MatakuliahFactory extends Factory
{
    public function definition(): array
    {
        return [
            'kode_mk' => fake()->unique()->numerify('MK###'),
            'nama_mk' => fake()->randomElement([
                'Pemrograman Web',
                'Basis Data',
                'Struktur Data',
                'Algoritma Pemrograman',
                'Jaringan Komputer',
                'Sistem Operasi',
                'Rekayasa Perangkat Lunak',
                'Kecerdasan Buatan',
                'Pemrograman Mobile',
                'Keamanan Sistem Informasi',
            ]),
            'sks' => fake()->numberBetween(1, 4),
            'semester' => fake()->numberBetween(1, 8),
        ];
    }
}