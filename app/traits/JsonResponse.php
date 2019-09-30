<?php

trait JsonResponse
{
    public function __construct()
    {
        header('Content-Type: application/json;charset=utf-8');
    }

    public static function reponseJsonSuccess($data = null, $code = 200){
        
        $json = $data;
		$json = json_encode($json);
		if ($json === false) {
			$json = json_encode(array("jsonError", json_last_error_msg()));
		    if ($json === false) {
		        $json = '{"jsonError": "unknown"}';
		    }
		    $code = 500;
		}
		http_response_code($code);
		echo $json;
    }

    public static function reponseJsonError($data = null, $code = 400){
        
        $json = ['error' => $data, 'code' => $code];
		$json = json_encode($json);

		if ($json === false) {			
			$json = json_encode(array("jsonError", json_last_error_msg()));
		    if ($json === false) {
		        $json = '{"jsonError": "unknown"}';
		    }
		    $code = 500;
        }
        
		http_response_code($code);
		echo $json;
    }
}
