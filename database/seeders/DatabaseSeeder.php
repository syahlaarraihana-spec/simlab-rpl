<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $now = now();

        DB::table('kategoris')->insert([
            ['nama_kategori' => 'Komputer & Laptop', 'deskripsi' => 'Laptop dan PC praktik', 'created_at' => $now, 'updated_at' => $now],
            ['nama_kategori' => 'Perangkat Jaringan', 'deskripsi' => 'Router, switch, access point', 'created_at' => $now, 'updated_at' => $now],
            ['nama_kategori' => 'Alat Perkabelan', 'deskripsi' => 'Kabel LAN, crimping tool, tester', 'created_at' => $now, 'updated_at' => $now],
            ['nama_kategori' => 'Multimedia', 'deskripsi' => 'Proyektor dan perangkat multimedia', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}