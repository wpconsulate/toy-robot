<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    /**
     * Variable that will specify the units of width
     */
    protected $width = 5;

    /**
     * Variable that will specify the units of height
     */
    protected $height = 5;


    public function __construct( $height, $width ){
        $this->height = $height;
        $this->width = $width;
    }

    public function isMovePermitted( $x, $y ){
        if( ($x >=0 && $x < $this->width) && ( $y >=0 && $y < $this->height ) )
            return true;
        return false;
    }
}
