<?php
class SFC_Controller extends Controller {
	public function index() {
		$this->_setTemplate(new Template('default.php'));
		$this->_template->bind('TITLE', 'Sanity Check Fail');
	}
}
?>