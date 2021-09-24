<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Robot extends Model
{
    use HasFactory;

    // Methods
    // Place, Move, Left, Right, Report

    // Directions
    // NORTH, EAST, SOUTH, WEST


    /**
     * @var table an instance of the TableController
     */
    protected $table;

    /**
     * @var $x integer X position of the robot on the table
     */
    protected $x;

    /**
     * @var $x integer Y position of the robot
     */
    protected $y;

    /**
     * @var $dir string
     * direction of the robot facing
     */
    protected $dir;


    public function __construct( Table $table ){
        $this->table  = $table;
        $this->place( 1,1, 'EAST' );
    }


    public function place( $x, $y, $dir ){

        // Set the initial Position of the Robot
        $this->x = $x;
        $this->y = $y;
        $this->dir = $dir;

    }


    /**
     * function that will move the position of the robot
     * as per the current face and position ( if allowed )
     */
    public function move(){

        $x = $this->x;
        $y = $this->y;

        switch($this->dir) {
            case 'NORTH':
                $y -= 1;
                break;
            case 'EAST':
                $x += 1;
                break;
            case 'SOUTH':
                $y += 1;
                break;
            case 'WEST':
                $x -= 1;
                break;
        }

        if(!$this->table->isMovePermitted($x, $y))
            return;

        $this->x = $x;
        $this->y = $y;

    }


    public function left(){
        switch($this->dir) {
            case 'NORTH':
                $this->dir = 'WEST';
                break;
            case 'EAST':
                $this->dir = 'NORTH';
                break;
            case 'SOUTH':
                $this->dir = 'EAST';
                break;
            case 'WEST':
                $this->dir = 'SOUTH';
                break;
        }
    }


    public function right(){
        switch($this->dir) {
            case 'NORTH':
                $this->dir = 'EAST';
                break;
            case 'EAST':
                $this->dir = 'SOUTH';
                break;
            case 'SOUTH':
                $this->dir = 'WEST';
                break;
            case 'WEST':
                $this->dir = 'NORTH';
                break;
        }
    }


    /**
     * function that will print the current position and facing of the robot
     */
    public function report(){
        printf('%d, %d, %s', $this->x, $this->y, $this->dir);
    }
}
