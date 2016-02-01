<?php

class Set_session_test extends TestCase
{
	public function test_set_session_value()
	{
		$test_value = 'test_value';
		$this->request->setCallable(
			function ($CI) use ($test_value) {
				$CI->session->set_userdata('test_variable', $test_value);
			}
		);
		$output = $this->request('GET', 'set_session/get_session_variable');
		$this->assertEquals($test_value, $output);
	}
}
