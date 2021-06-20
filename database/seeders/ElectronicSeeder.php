<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ElectronicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('electronic')->insert([
        	[
        		'title'=>'Harman Kardon Onyx Studio 5 Premium Bluetooth Speaker',
	        	'type'=>'Speaker',
	        	'brand'=>'Harman Kardon',
	        	'condition'=>'used',
	        	'price'=>'Rp 2.600.000',
                'description'=>'Baru dikeluarkan sekali (hanya untuk fotoshoot), FULLSET Like New',
	        	'image'=>"/web app project new/images/speaker.jpeg",
                'location'=>'Jakarta Selatan',
                'categories'=>'3',
                'owner'=>'26'

        	],
        	[
        		'title'=>'iPad7 Space Gray',
	        	'type'=>'Tablet',
	        	'brand'=>'Apple',
	        	'condition'=>'used',
	        	'price'=>'Rp 4.999.000',
                'description'=>'Baru pakai sekali (salah beli), FULLSET Like New',
	        	'image'=>"public/web app project new/images/ipad.jpeg",
                'location'=>'Jakarta Timur',
                'categories'=>'3',
                'owner'=>'25'

        	]
        	
        ]);

    }
}
