<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImportCalonTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('import_calon')->delete();
        
        \DB::table('import_calon')->insert(array (
            0 => 
            array (
                'id' => 12,
                'nama' => 'Data Sesuai Pendaftar Tapi Nilai Masih Acak',
                'slug' => 'data-sesuai-pendaftar-tapi-nilai-masih-acak',
                'file' => '20230601043223-data-sesuai-pendaftar-tapi-nilai-masih-acak.xlsx',
                'count' => 549,
                'created_at' => '2023-06-01 16:32:23',
                'updated_at' => '2023-06-01 16:32:32',
            ),
        ));
        
        
    }
}