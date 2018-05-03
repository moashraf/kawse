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
$add->value="Building 314, Halla Mall City Centre, S Teseen, Fifth Settelment, New Cairo";
$add->save();
$add=new siteStings;
$add->key='phone';
$add->value="01001112544 – 01001112771";
$add->save();
$add=new siteStings;
$add->key='Mail';
$add->value="Info@kawse.co";
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
$add->value="Kawse Urban Development,
For the first impression perhaps the name look like strange to you, but its not keep going if you know the secret behind this name,  Kawse, is a Greek name means the The primary asset, and from it derives the life of the Greeks four elements of the basic water, air, fire and earth.
So as well as the case, kawse for urban development with its previous creative works constitute The primary asset  for urban beauty and structural durability.
Moreover to made you plus Astonishment the name of kawse, it was famous in egypt because “khant kawse” was the daughter of King Menkaure one of the owners of the three pyramids, the founder of the fourth Pharaonic family and threw the city of kawse in the Pyramids area where engineers and workers reside As the first city in the Pharaonic era to enjoy that unique urban planning and perhaps the remnants of that city look tall to tell the story of this urban genius of the fragrant time and splendor of the place.
";
$add->save();
$add=new siteStings;
$add->key='times work';
$add->value="
  كل بوم من ٩ الى ٦ عادا الجمعة
";
$add->save();
$add=new siteStings;
$add->key='logo';
$add->value="kawse-1.png";
$add->save();


$add=new siteStings;
$add->key='Vision';
$add->value="Is to be the leading construction company in our markets and with the cleints, provide the best technical about all our services.";
$add->save();

$add=new siteStings;
$add->key='call action';
$add->value="Is to be the leading construction company in our markets and with the cleints";
$add->save();

$add=new siteStings;
$add->key='quality';
$add->value="Kawse Is proud to be the leading providing of quality construction services and be a trusted and reliable that you can depend on to give you the best services a high quality materials and modern techniques to create.
you can depend on us, to provide the best engineering consulting, technical supervision, designs and decorations, construction solution, Interior designs, construction solution services, Contact us to learn more about how we can achieve the best together.
";
$add->save();

$add=new siteStings;
$add->key='Mission';
$add->value="we work to achieve excellence based on combining the high quality and safety required, while reducing costs based on the value and efficiency of the team, while taking care of the interests of all relevant in the Egyptian land market.";
$add->save();


    }
}