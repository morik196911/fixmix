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
         
		$this->view->set('content', $this->getContent());
		$this->view->set('title', $this->title ?? null);
		$this->view->renderHtml('main_index.php');
	}

 abstract protected function getContent();
}