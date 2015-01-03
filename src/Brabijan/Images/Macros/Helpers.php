<?php

namespace Brabijan\Images\Macros;

use Nette;

class Helpers extends Nette\Object
{

	public static function prepareMacroArguments($macro)
	{
		$arguments = array_map(function ($value) {
			return trim($value);
		}, explode(",", $macro));

		$name = implode(".'/'.", explode("/", $arguments[0]));
		$size = (isset($arguments[1]) AND !empty($arguments[1])) ? $arguments[1] : NULL;
		$flags = (isset($arguments[2]) AND !empty($arguments[2])) ? $arguments[2] : NULL;

		return array(
			"name" => $name,
			"size" => $size,
			"flags" => $flags
		);
	}

}