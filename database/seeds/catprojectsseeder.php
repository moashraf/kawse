<?php

use Illuminate\Database\Seeder;
use App\Models\catProject;

class catprojectsseeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        


  for ($i=0; $i <5 ; $i++) { 
$add=new catProject;

$add->title='catProject title '.rand(0,9);
 $add->img_url="7.jpg";
$add->save();
}


        
    }
}