<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{	
        $url = 'http://api.icndb.com/jokes/random/3?escape=javascript';

        $ch = curl_init($url);

        /* set the content type json */

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        /* set return type json */

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        /* execute request */

        $result = curl_exec($ch);

        /* close cURL resource */

        curl_close($ch);

		 /* process json */
		
		$json = json_decode($result, true);
		
		if($json["type"]=="success")
		{
			$jokes = $json["value"];
		}
		else
		{
			$jokes = [
				['categories' => ['not funny'], 'joke' => 'You won\'t make jokes of Chuck Norris - Chuck Norris will make joke of you.']
			];
		}
	
		return view('chuck_norris', ['jokes' => $jokes]);
	}
}
