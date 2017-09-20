<?php

namespace App\Console;

use Illuminate\Console\Command;

class TestCommand extends Command
{

	protected $signature = 'test {option}';


	protected $description = 'Dit is voor het testen van processen';


	public function __construct()
	{
		parent::__construct();
	}

	public function handle()
	{
		
	}
}