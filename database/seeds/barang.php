<?php

use Illuminate\Database\Seeder;

class barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang=[['harga_barang'=>'1200000','nama_barang'=>'gitar',
        		 ['harga_barang'=>'50000','nama_barang'=>'tas',
                 ['harga_barang'=>'14000000','nama_barang'=>'lemari',
                 ['harga_barang'=>'100000','nama_barang'=>'baju',
                 ['harga_barang'=>'14500000','nama_barang'=>'kulkas'
        		];
        		DB::table('barangs')->insert($barang);
    }
}
