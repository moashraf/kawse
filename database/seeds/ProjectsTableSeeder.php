<?php

use Illuminate\Database\Seeder;
use App\Models\Projects;

class ProjectsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        


  for ($i=0; $i <15 ; $i++) { 
$add=new Projects;

$add->title='Projects title ';
 $add->photo="7.jpg";
 $add->cat="2";

 $add->body=" Projects  The NanoAir is a heavy duty versatile aluminium workboat with a Hatz air-cooled inboard diesel engine, with no thru-hull penetrations. Can be started outside the water and can operate in mud, oil slicks, or heavily contaminated waters. Designed by Lomocean of New Zealand ".rand(0,9);
$add->save();
}


        
    }
}