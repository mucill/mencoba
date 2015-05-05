<?php

class ProductTest extends TestCase {
	
	/**
	 * Show product list
	 * @param 	any 
	 * @return 	object 	Show result as object
	 */

	public function testProductEmpty() 
	{
		$response = $this->assertEmpty('','ProductsController@index');
	}

	public function testProductNotEmpty() 
	{
		$response = $this->assertNotEmpty('foo','ProductsController@index');
	}


}