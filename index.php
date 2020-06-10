<?php

define('BASEPATH', dirname(__FILE__) . '/');

function v(&$var) {
    return isset($var) ? $var : null;
}

// get request
function req($name) {
    static $request = null;
    if(null === $request) {
        $request = array_filter(
            $_REQUEST, 
            function ($v) {
                return ! empty($v) || stripcslashes($v) !== '';
            }
        );
    }
    return v($request[$name]);
}

#vendor
function application () {
    static $app = null;
    if(null === $app) {
        $fragment = explode('/', req('url'));
        $site = array_shift($fragment) ?: 'main';
        require(BASEPATH .'core/config.php');   
        require(BASEPATH .'controller/'. $site . '.php');   
        return ob_get_clean();
    }
    return $app;
}

//check type
function mobileCheck()
{
    $mobile_agent = '/(iPod|iPhone|Android|BlackBerry|SymbianOS|SCH-M\d+|Opera Mini|Windows CE|Nokia|SonyEricsson|webOS|PalmOS)/';
    if (preg_match($mobile_agent, $_SERVER['HTTP_USER_AGENT'])) {
        return true;
    }
    else{
        return false;
    }
}

//viewPATH
if(mobileCheck())
{
    $csspath = '/publishing/public/assets/css/mobile/';
    $imagepath = '/publishing/public/assets/image/mobile/';
    $viewPath = BASEPATH . 'view/mobile/';
}
else
{
    $csspath = '/publishing/public/assets/css/pc/';
    $imagepath = '/publishing/public/assets/image/pc/';
    $viewPath = BASEPATH . 'view/pc/';
}
define('VIEWPATH', $viewPath);
define('CSSPATH', $csspath);
define('IMAGEPATH', $imagepath);

echo application();
