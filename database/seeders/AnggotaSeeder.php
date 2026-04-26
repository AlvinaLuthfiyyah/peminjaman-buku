<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AnggotaSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'anggota@gmail.com'],
            [
                'name' => 'Anggota',
                'password' => Hash::make('12345678'),
                'role' => 'anggota',
            ]
        );
    }
}