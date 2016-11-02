<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class PhpCodeSniffer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'phpcs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'PHP Code Sniffer';

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
        $output = [];
        exec('phpcs --standard='.__Dir__.'/../../../phpcs-ruleset.xml '.__Dir__.'/../../../', $output);
        $stringOutput = '';
        foreach ($output as $string) {
            $stringOutput .= $string.PHP_EOL;
        }
        dd($stringOutput);
    }
}
