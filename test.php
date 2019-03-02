<?php
	require __DIR__.'/vendor/autoload.php';

	spl_autoload_register(function($class)
	{
		$classmap = [
			'Test\ComplexNumberTest' => 'test/ComplexNumberTest.php',
			'Test\ComplexOperationTest' => 'test/ComplexOperationTest.php',
			'Src\ComplexNumber' => 'src/ComplexNumber.php',
			'Src\ComplexOperation' => 'src/ComplexOperation.php'
		];

		if(isset($classmap[$class])) require_once(__DIR__.'/'.$classmap[$class]);
	});

	use PHPUnit\Framework\TestSuite;
	use PHPUnit\TextUI\TestRunner;

	$suite=new TestSuite('Complex test');

	$suite->addTestSuite('Test\ComplexNumberTest');
	$suite->addTestSuite('Test\ComplexOperationTest');

	TestRunner::run($suite);
