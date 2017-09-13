<?php

namespace App\Service;

use App\DAL\WordDAL as Word;

class WordService
{

	public static function store($object)
	{
		if(count($object->english < 40)){ 
			return Word::create($object);
		}
	}

	public static function findAll()
	{
		return Word::findAll();
	}

	public static function findOneByEnglishWord($word)
	{
		if(count($object->english < 40)){ 
			return Word::findOneByEnglishWord($word);
		}
	}
}