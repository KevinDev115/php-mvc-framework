<?php

class Controller 
{
    use JsonResponse, Authentication;
    
	public function model($model)
	{
		if (file_exists('../app/models/'. ucwords($model) .'Model.php')) { 			
			require_once '../app/models/'.ucwords($model).'Model.php';
			$m = ucwords($model).'Model';
			return new $m;
		}else{
			die("<b>Error:</b> Model '".$model."' Not Found.");
		}
    }
    
    public function view($view, $data = [])
	{
		if (file_exists('../app/views/'.strtolower($view).'.view.php')) {
			require_once '../app/views/'.$view.'.view.php';
		}else{
			die("<b>Error:</b> View '".$view."' Not Found.");
		}
	}
}
