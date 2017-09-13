<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Service\WordService as Word;
use View;

class WordController extends Controller
{

	public function index()
	{
		$words = Word::findAll();

		return view('index', ['words' => $words ]);

	}	

}