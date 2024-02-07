<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Kategori;
use App\Models\Wallet;
use App\Models\Produk;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       $dataUser = [
        [
            'name' => 'bank',
            'email' => 'bank@gmail.com',
            'role' => 'bank',
            'password' => bcrypt('bank'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ],
        [
            'name' => 'kantin',
            'email' => 'kantin@gmail.com',
            'role' => 'kantin',
            'password' => bcrypt('kantin'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ],
        [
            'name' => 'wildan',
            'email' => 'wildan@gmail.com',
            'role' => 'customer',
            'password' => bcrypt('wildan'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ],
    ];

    foreach ($dataUser as $key => $val) {
        User::create($val);
    }

        $dataKategori = [
            [
                'nama_kategori' => 'Makanan',
            ],
            [
                'nama_kategori' => 'Minuman',
            ],
        ];
        
        foreach ($dataKategori as $key => $val) {
            Kategori::create($val);
        }

        $dataProduk = [
            [
                'nama_produk' => 'Indomie',
                'harga' => 3500,
                'stok' => 10,
                'foto' => 'indomiae.jpeg',
                'desc' => 'Indomie Seleraku',
                'id_kategori' => 1,
            ],
            [
                'nama_produk' => 'Teh Kotak',
                'harga' => 8000,
                'stok' => 10,
                'foto' => 'tehkotak.jpeg',
                'desc' => 'Teh dalam kemesan kotak',
                'id_kategori' => 2,
            ],
        ];

        foreach ($dataProduk as $key => $val) {
            Produk::create($val);
        }

        $dataWallet = [
            [
                'rekening' => '123456789',
                'id_user' => '1',
                'saldo' => '100000',
                'status' => 'aktif'
            ],
            [
                'rekening' => '987654321',
                'id_user' => '2',
                'saldo' => '120000',
                'status' => 'aktif'
            ],
            [
                'rekening' => '214365879',
                'id_user' => '3',
                'saldo' => '130000',
                'status' => 'aktif'
            ],
            [
                'rekening' => '132457689',
                'id_user' => '4',
                'saldo' => '140000',
                'status' => 'aktif'
            ],
        ];
    
        foreach ($dataWallet as $key => $val) {
            Wallet::create($val);
        }
    }
}
