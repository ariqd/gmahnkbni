<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
           'nama' => 'Sekretaris Jemaat'
        ]);

        Role::create([
            'nama' => 'Dept. Sekolah Sabat'
        ]);

        Role::create([
            'nama' => 'Dept. Pemuda'
        ]);
    }
}
