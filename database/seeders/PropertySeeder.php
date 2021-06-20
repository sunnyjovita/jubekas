<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('property')->insert([
        	[
        		'title'=>'Apartemen FX Sudirman, 2+1 Kamar Tidur',
	        	'type'=>'Apartment',
	        	'landSize'=>'0',
	        	'buildingSize'=>'145 M2',
	        	'address'=>'Jl. Jend. Sudirman, RT.1/RW.3, Gelora, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10270',
	        	'bedrooms'=>'3',
	        	'bathrooms'=>'2',
	        	'year'=>'2011',
                'certificate'=>'Hak Pakai',
	        	'image'=>"/web app project new/images/rumah1.jpeg",
	        	'description'=>'untuk dijual',
                'location'=>'Jakarta Pusat',
                'price'=>'Rp 3.900.000.000',
                'categories'=>'5',
                'owner'=>'26'

        	],
        	[
        		'title'=>' Rumah Eksklusif 2 Lantai & Hoek di Cluster Serenade Lake, Gading Serpong, Tangerang',
	        	'type'=>'Rumah',
	        	'landSize'=>'276 M2',
	        	'buildingSize'=>'300 M2',
	        	'address'=>'West Panunggangan, Cibodas, Tangerang City, Banten',
	        	'bedrooms'=>'4',
	        	'bathrooms'=>'3',
	        	'year'=>'2009',
                'certificate'=>'PPJB',
	        	'image'=>"/web app project new/images/rumah2.jpeg",
	        	'description'=>'untuk dijual',
                'location'=>'Gading Serpong, Tangerang',
                'price'=>'Rp 5.900.000.000',
                'categories'=>'5',
                'owner'=>'26'

        	]
        	
        ]);

    }
}
