<?php
	namespace Test;

	use PHPUnit\Framework\TestCase;
	use Src\ComplexNumber;
	use Src\ComplexOperation;

	class ComplexOperationTest extends TestCase
	{
		function testAdd()
		{
			$n1 = new ComplexNumber(-1, -3);
			$n2 = new ComplexNumber(3, 2);

			$this->assertEquals(ComplexOperation::Add($n1,$n2), 'Re=2,Im=-1', 'string compare');
			$this->assertEquals(ComplexOperation::Add($n1,$n2), new ComplexNumber(2, -1), 'object compare');
		}

		function testSub()
		{
			$n1 = new ComplexNumber(17, -35);
			$n2 = new ComplexNumber(15, 5);

			$this->assertEquals(ComplexOperation::Sub($n1,$n2), 'Re=2,Im=-40', 'string compare');
			$this->assertEquals(ComplexOperation::Sub($n1,$n2), new ComplexNumber(2, -40), 'object compare');
		}

		function testMul()
		{
			$n1 = new ComplexNumber(1, -5);
			$n2 = new ComplexNumber(5, 2);

			$this->assertEquals(ComplexOperation::Mul($n1,$n2), 'Re=15,Im=-23', 'string compare');
			$this->assertEquals(ComplexOperation::Mul($n1,$n2), new ComplexNumber(15, -23), 'object compare');
		}

		function testDiv()
		{
			$n1 = new ComplexNumber(2, 7);
			$n2 = new ComplexNumber(10, 0);

			$this->assertEquals(ComplexOperation::Div($n1,$n2), 'Re=0.2,Im=0.7', 'string compare');
			$this->assertEquals(ComplexOperation::Div($n1,$n2), new ComplexNumber(1/5, .7), 'object compare');
		}
	}