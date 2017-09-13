<?php

namespace App\DAL;

use App\Model\Word;

class WordDAL
{

	public static function create($object)
	{

		$word = new Word;
		$word->english = $object->english;
		$word->origin = $object->origin;

		$word->save();

		return $word;
	}

	public static function findAll()
	{
		return Word::all();
	}

	public static function findOneByEnglishWord($word = 'the')
	{
		return Word::Where(['english' => $word])->get();
	}


}