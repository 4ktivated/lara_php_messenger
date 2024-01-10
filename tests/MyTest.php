<?php

class MyTest extends TestCase {

	public function testRedirect()
	{
		$response = $this->call('GET', '/');

		$this->assertEquals(302, $response->getStatusCode());
	}
}
