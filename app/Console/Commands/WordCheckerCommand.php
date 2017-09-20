<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Core\WordProcessor as Processor;

class WordCheckerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check {text}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $paragraph = $this->argument('text');
        Processor::processParagraph($paragraph);
    }
}
