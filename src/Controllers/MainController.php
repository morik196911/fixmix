<?php
namespace App\Controllers ;

use App\Core\Controller;

class MainController extends Controller {

	public function __construct() {
		parent::__construct();
	}
   
public function getContent() {

  return '/main/main.php';
}


}//