<?php

use Illuminate\Database\Seeder;
use App\Models\slider;
class slidersseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  for ($i=0; $i <5 ; $i++) { 
$add=new slider;

$add->title='Welcome to kawse Construction Services';
 $add->photo="14.jpg";
 $add->body=" We provide comprehensive Building & construction solutions with our expert over 10 years experience ".rand(0,9);
$add->save();
}



    }
}
