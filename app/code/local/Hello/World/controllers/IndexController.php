<?php
class Hello_World_IndexController extends Mage_Adminhtml_Controller_Action
{
	public function indexAction() {
		echo "<pre>";
		echo "Hello World\n";
		echo "Full Action Name: " . $this->getFullActionName() . "\n";
	}
}
