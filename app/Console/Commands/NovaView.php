<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class NovaView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:view {view}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cria nova view';

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
        
        $view = $this->argument('view');
        $nome = resource_path()."\\views\\".$view.".blade.php";
        $fp = fopen($nome,"w+");
        fputs($fp,"/***");
        fputs($fp,"* Nome :".$nome);
        fputs($fp,"*/");
        fclose($fp);
        $this->info("View criada: {$nome}");

    }
}
