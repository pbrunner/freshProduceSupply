<?php
class config{
  public $url_public   = '/~pjbrunn/Project_3';
  public $base_url     = '';  /* Selected below based upon server */
  public $up_public    = "/s/bach/c/under/pjbrunn/public_html/Project_3/img/";
  public $upload_dir   = ''; /* Selected below based upon server */
  public $pad_length   = 6;

	public $site_name = "CT 310 Project 03";
	public $page_name = "";
	public $ingredient="";
}

$config = new config();

$test_local_p = (in_array($_SERVER['REMOTE_ADDR'], array('127.0.0.1', "::1")));
$config->base_url   = $config->url_public;
$config->upload_dir = $config->up_public;

require_once __DIR__ .'/../assets/database.php';

if(!file_exists("groceries.db"))
{
	header( 'Location: ./createdb.php' ) ;
}
