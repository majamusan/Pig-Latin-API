<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use IanLChapman\PigLatinTranslator\Parser;


class TranslatorController extends Controller
{
	protected $parser;
	public function __construct (Parser $parser)
	{
		$this->parser = $parser;

	}
    /**
     * Translates a string from English in to Pig Latin
     * @param  string $string The string to be translated
     * @return string         The result of the translation
     */
	public function translate($string)
	{
		return $this->parser->translate($string);
	}
}
