<?php

use Illuminate\Database\Seeder;
use App\Models\siteStings;

class siteseeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {    

$add=new siteStings;
$add->key='Web site name ';
 $add->value="kawse Construction ";
$add->save();
$add=new siteStings;
$add->key='x';
 $add->value="30.0805954";
$add->save();
   $add=new siteStings;
$add->key='y';
 $add->value="31.3391047";
$add->save();
$add=new siteStings;
$add->key='z';
$add->value="15";
$add->save();
$add=new siteStings;
$add->key='Location';
$add->value="20c Avenue, lakepool, USA";
$add->save();
$add=new siteStings;
$add->key='phone';
$add->value="0123 4567 8901 / 9876 543 210";
$add->save();
$add=new siteStings;
$add->key='Mail';
$add->value="contact@kawse.co";
$add->save();
$add=new siteStings;
$add->key='facebook';
$add->value="facebook.com";
$add->save();
$add=new siteStings;
$add->key='twitter';
$add->value="twitter.com";
$add->save();
$add=new siteStings;
$add->key='linkedin';
$add->value="linkedin.com";
$add->save();
$add=new siteStings;
$add->key='youtube';
$add->value="youtube.com";
$add->save();
$add=new siteStings;
$add->key='About Us';
$add->value="Lorem ipsum dolort amet, consectetur adipiscing elit. Morbi sagittis, sem quis lacinia faucibus, orci ipsum gravida tortor, vel interdum mi sapient justo. Nulla varius consequat magna, molestie ipsum volutpat";
$add->save();
$add=new siteStings;
$add->key='times work';
$add->value="Monday - Friday : 9.00 - 7.00";
$add->save();
$add=new siteStings;
$add->key='logo';
$add->value="kawse-1.png";
$add->save();




    }
}