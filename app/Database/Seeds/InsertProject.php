<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertProject extends Seeder
{
    public function run()
    {

        $db = \Config\Database::connect();
        $builder = $db->table('project');
        $data = [
            [
                'title' => 'E-Comerse Using Public API',
                'image_1' => 'p-1.png',
                'description' => 'Hasil Pelatihan FGA Javascript with API Bacth-2'
            ],
            [
                'title' => 'KRS Checker HMJ-TI Undiksha ',
                'image_1' => 'p-2.png',
                'description' => 'Hasil eksekusi program kerja bidang 5 HMJ TI 2022/2023',
                'ongoing'   => true
            ],
            [
                'title' => 'Perancangan Basis Data E-Ticketing Konser',
                'image_1' => 'p-3.png',
                'description' => 'Project berkelompok akhir semester mata kuliah Perancangan Basis Data'
            ],
            [
                'title' => 'Portal Siswa Regina Pacis ',
                'image_1' => 'p-4.png',
                'description' => 'Pembuatan portal siswa regina pacis bajawa sebagai bahan latihan pemrograman web',
                'ongoing'   => true

            ],
        ];
        $builder->insertBatch($data);
    }
}
