<?php
namespace App\Core;

use App\Views\View;
use App\Core\Format;

abstract class Controller {
	
	protected $view;
	protected $data;
	protected $format;

	public function __construct()
	{
		$this->format = new Format();
		$this->data = $this->format->xss($_REQUEST);
		$this->view = new View(__DIR__ . '/../../templates');

		$this->view->renderHtml('main_index.php');
	}
 abstract protected function getContent();
}