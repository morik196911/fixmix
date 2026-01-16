<?php
namespace App\Controllers ;

use App\Core\Controller;

class MainController extends Controller {
   
public function main() {
 $this->view->renderHtml('main/main.php');
}

}//