<?php

require 'Actions/Authentification.php';
		
class StackTest extends PHPUnit_Framework_TestCase
{
	
	public function test()
	{
		//$stack = array();
		//$this->assertEquals(0, count($stack));
		//array_push($stack, 'foo');
		
		$this->assertEquals(true, test('anass', 'anass'));
		
	}
}

?>
