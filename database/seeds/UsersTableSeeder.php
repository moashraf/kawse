<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        
        for ($i=0; $i <1 ; $i++) { 
            $add=new User;
             
            $add->name="kawse";
            $add->email="kawse@gmail.com";
            $add->password= bcrypt("kawse**2018");
             $add->save();
            }
        
    }
}