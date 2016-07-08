<?php
namespace app;
/**
 *
 */
class App
{

  function __construct()
  {

    $url = explode("/",$_GET['url']);
    $qw = trim($url[0],'');
    $class = 'app\controller\\'.$qw;
    $object = new $class();
  }

}
