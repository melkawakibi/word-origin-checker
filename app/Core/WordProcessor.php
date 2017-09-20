<?php

namespace App\Core;

use App\Service\WordService as Word;

class WordProcessor
{

	public static function processParagraph($paragraph)
	{

		$words = Word::findAll();

		$regex = '(';

		foreach ($words as $key => $word) {
			$regex .=  $word->english . '|';
		}

		$regex .= $words->last()->english . ')';

		preg_match_all($regex, $paragraph, $matches);

		print_r($matches);
	}
}