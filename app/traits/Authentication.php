<?php

trait Authentication
{
    public function checkSession($session, $rute = null)
    {        
        if ($session) {
            $rute = empty($rute) ? 'Location: '.APP_URL_ASSETS.'/login' : 'Location: '.APP_URL_ASSETS.'/'.$rute;
            if (!isset($_SESSION['AUTH'])) {
                header($rute);
            }
        }else{
            $rute = empty($rute) ? 'Location: '.APP_URL_ASSETS.'/dashboard' : 'Location: '.APP_URL_ASSETS.'/'.$rute;
            if (isset($_SESSION['AUTH'])) {
                header($rute);
            }
        }
    }

    public function checkRolSession($rol)
    {
        if (isset($_SESSION['AUTH']['ROL'])) {
            if ($rol != $_SESSION['AUTH']['ROL']) {
                redireccionar('dashboard');
            }		
        }else{
            redireccionar('dashboard');
        }
    }
}
