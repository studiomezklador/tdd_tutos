<?php

class AssertionTest extends PHPUnit_Framework_TestCase {
	public function testBasicAssertion() // success
	{
		$this->assertTrue(1 + 5 == 6);
	}
	public function testAnotherBasicAssertion() // failure
	{
		$this->assertTrue(1 + 5 != 6, 'It should be 6');
	}

	// public function testSomeOtherBasicAssertion() // failure
	// {
	// 	$this->assertTrue(1 + 6, 7);
	// }

	public function testArrayAssertion()
	{
		$arr = array();
		$this->assertCount(0, $arr); // success
		$arr[] = 2;
		$this->assertCount(1, $arr); // success
		$arr[] = 65;
		$this->assertContains(65, $arr); // success
		$this->assertContains(12, $arr); // failure
		$this->assertNotContains(100, $arr); // success
	}
}