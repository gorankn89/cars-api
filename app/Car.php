<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    // $table->string('brand');
    //         $table->string('model');
    //         $table->integer('year');
    //         $table->integer('maxSpeed');
    //         $table->boolean('isAutomatic');
    //         $table->string('engine');
    //         $table->string('numbersOfDoors');
    //         $table->timestamps();

    protected $filable = ['brand', 'model', 'year', 'maxSpeed', 'isAutomatic', 'engine', 'numberOfDoors'];
}
