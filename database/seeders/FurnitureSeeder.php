<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FurnitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('furniture')->insert([
        	[
        		'title'=>'Lemari baju anak',
	        	'type'=>'lemari',
	        	'condition'=>'new',
	        	'price'=>'Rp 699.000',
                'description'=>'Lemari baju untuk anak warna cream',
	        	'image'=>"public/web app project new/images/fashion.jpg",
                'location'=>'Jakarta Timur',
                'categories'=>'2',
                'owner'=>'26'

        	],
        	[
        		'title'=>'Meja kayu',
                'type'=>'Meja',
                'condition'=>'used',
                'price'=>'Rp 95.000',
                'description'=>'Meja kecil warna cokelat tua',
                'image'=>"public/web app project new/images/fashion.jpg",
                'location'=>'Jakarta Utara',
                'categories'=>'2',
                'owner'=>'25'

        	]
        	
        ]);
    }
    
}
