<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;
use Carbon\Carbon;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Menambahkan data mahasiswa
        for ($i = 0; $i < 37; $i++) {
            $gender = $faker->randomElement(['L', 'P']);
            $tanggal_lahir = $faker->dateTimeBetween('-30 years', '-18 years')->format('Y-m-d');

            Mahasiswa::create([
                'nama' => $faker->name,
                'nim' => $faker->unique()->regexify('[A-Za-z0-9]{8}'),
                'alamat' => $faker->address,
                'tanggal_lahir' => $tanggal_lahir,
                'gender' => $gender,
                'usia' => Carbon::parse($tanggal_lahir)->age,
            ]);
        }
    }
}
