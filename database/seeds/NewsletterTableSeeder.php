<?php

use App\Newsletter;
use Illuminate\Database\Seeder;

class NewsletterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Newsletter::truncate();


        for ($i=1; $i <11 ; $i++) { 

        	 Newsletter::create([

        	'name' => 'Usuario {{$i}}',
        	'email' => 'usuario{{$i}}@email.com' 


        ]);
        	# code...
        }

      
    }
}
