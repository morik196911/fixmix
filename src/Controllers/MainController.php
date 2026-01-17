<?php
namespace App\Controllers ;

use App\Core\Controller;

class MainController extends Controller {
  protected $title = 'Main page title';
  
	public function __construct() {
		parent::__construct();
	}
   
public function getContent() {

  return "/main/main.php";
}


}//