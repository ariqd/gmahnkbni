<?php

namespace Database\Seeders;

use App\Models\Ibadah;
use Illuminate\Database\Seeder;

class IbadahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Kalo sekertaris : rabu malam sm khotbah
        // Dept. Sekolah sabat: sekolah sabat
        // Dept. Pemuda : vesper sm ibadah pemuda advent

        Ibadah::create([
            'role_id' => 1,
            'nama' => 'Khotbah'
        ]);

        Ibadah::create([
            'role_id' => 1,
            'nama' => 'Rabu Malam'
        ]);

        Ibadah::create([
            'role_id' => 2,
            'nama' => 'Sekolah Sabat'
        ]);

        Ibadah::create([
            'role_id' => 3,
            'nama' => 'Vesper'
        ]);

        Ibadah::create([
            'role_id' => 3,
            'nama' => 'Pemuda Advent'
        ]);
    }
}
