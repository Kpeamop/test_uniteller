<?php
	namespace Src;

	class ComplexOperation
	{
		public static function Add(ComplexNumber $var1, ComplexNumber $var2)
		{
			return new ComplexNumber($var1->Re + $var2->Re, $var1->Im + $var2->Im);
		}

		public static function Sub(ComplexNumber $var1, ComplexNumber $var2)
		{
			return new ComplexNumber($var1->Re - $var2->Re, $var1->Im - $var2->Im);
		}

		public static function Mul(ComplexNumber $var1, ComplexNumber $var2)
		{
			return new ComplexNumber(
				$var1->Re * $var2->Re - $var1->Im * $var2->Im,
				$var1->Re * $var2->Im + $var2->Re * $var1->Im
			);
		}

		public static function Div(ComplexNumber $var1, ComplexNumber $var2)
		{
			return new ComplexNumber(
				($var1->Re * $var2->Re + $var1->Im * $var2->Im) / ($var2->Re**2 + $var2->Im**2),
				($var2->Re * $var1->Im - $var1->Re * $var2->Im) / ($var2->Re**2 + $var2->Im**2)
			);
		}
	}