<?php
namespace Engine;

class Auth
{
    public static function logged($key)
    {
    	$session_status = @$_SESSION[$key];
        return $session_status;
    }

    public static function destroy()
    {
        return session_destroy();
    }
}