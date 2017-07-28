<?php

class SimpleTest extends PHPUnit_Framework_TestCase
{
	public function testAlwaysPass()
	{
		var_dump(\PHPUnit_Runner_Version::id());
		$this->assertTrue(true);
	}
}