<?php  

 
 function footer_Projects()
 {
 	$Project =   App\Models\Projects::take(3)->get();
  return (object)  $Project ;
 }

 function site_settings($key)
 {
 	 $siteStings =   App\Models\siteStings::where('key', $key) ->first();
 	 $siteStings_object=(object)  $siteStings ;
 	 return   $siteStings_object->value ;
 }

 function services_mn()
 {
	$services =   App\Models\services::take(10)->get();
 	 $services_object=(object)  $services ;
 	 return   $services ;
 }



?>