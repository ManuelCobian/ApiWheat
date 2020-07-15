<?php namespace App\Controllers;

class Home extends BaseController
{
	
	public function index()
	{

	$content=file_get_contents('https://www.metaweather.com/api/location/2487956/2013/4/30/');
	

	$json_conten=json_decode($content);

	$result['weather']=$json_conten;

	return view("welcome_message",$result);
	
	}

	//--------------------------------------------------------------------

}
