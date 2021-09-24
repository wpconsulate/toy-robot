<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\Models\Table;
use App\Models\Robot;

class RunRobot extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'run:robot {method}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    protected $table;

    protected $robot;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {

        $this->table = new Table( 5, 5);
        $this->robot = new Robot( $this->table );
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $method =  $this->argument('method');
        if($method){

            switch( $method ){
                case 'move':
                    $this->robot->move();
                    break;
                case 'left':
                    $this->robot->left();
                    break;
                case 'right':
                    $this->robot->right();
                    break;
                case 'report':
                    $this->robot->report();
                    break;
            }

        }
    }
}
