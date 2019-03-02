<?php
	namespace Src;

	class ComplexNumber
	{
		private $Re;
		private $Im;

		public function __get($k)
		{
			return in_array($k, ['Re', 'Im']) ? $this->$k : NAN;
		}

		public function __construct($re, $im)
		{
			$this->Re = floatval($re);
			$this->Im = floatval($im);
		}

		public function __toString()
		{
			return "Re=$this->Re,Im=$this->Im";
		}
	}