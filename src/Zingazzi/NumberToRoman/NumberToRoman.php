<?php namespace Zingazzi\NumberToRoman;

/**
* Convert number to roman number
*/
class NumberToRoman
{

	protected static $series = [
		1000 => 'M',
		900  => 'CM',
		500  => 'D',
		400  => 'CD',
		100  => 'C',
		90   => 'XC',
		50   => 'L',
		40   => 'XL',
		10   => 'X',
		9    => 'IX',
		5    => 'V',
		4    => 'IV',
		1    => 'I'
	];

	/**
	 * Convert number to roman number
	 * int $number [number to convert]
	 * return $roman [number in roman way]
	 */
	public static function convert($number)
	{

		if($number == 0) {
			return '';
		}

		$roman = '';
		foreach (static::$series as $limit => $glyph)
		{
			while ($number >= $limit)
			{
				$roman  .= $glyph;
				$number -= $limit;
			}
		}
		return $roman;
	}
}