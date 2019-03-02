<?php
	namespace Test;

	use PHPUnit\Framework\TestCase;
	use Src\ComplexNumber;

	class ComplexNumberTest extends TestCase
	{
		const RE = 13.11;
		const IM = 2.02;

		private $obj;

		function setUp(): void
		{
			$this->obj = new ComplexNumber(self::RE, self::IM);
		}

		function testCreateObject()
		{
			$this->assertIsObject($this->obj);
		}

		function testToString()
		{
			$this->assertEquals($this->obj, 'Re='.self::RE.',Im='.self::IM);
		}

		function testRe()
		{
			$this->assertEquals($this->obj->Re, self::RE);
		}

		function testIm()
		{
			$this->assertEquals($this->obj->Im, self::IM);
		}
	}