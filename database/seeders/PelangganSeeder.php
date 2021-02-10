<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Faker\Factory as Faker;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        for ($i = 0; $i < 20; $i++) {
            $data = [
                'pelanggan' => $faker->name,
                'alamat' => $faker->address,
                'telp' => $faker->phoneNumber,
            ];
            Pelanggan::create($data);
        }
    }
}
