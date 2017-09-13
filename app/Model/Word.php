<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{

	protected $table = "words";

	protected $fillable = [
		'english', 'origin'
	];
}