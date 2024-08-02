<?php

namespace App\Controllers;

use App\Models\Points;
use Livewire\Component;

class Welcome extends Component
{
    public $number=0;

    public function increment(){
        ++$this->number;
    }
    public function decrement(){
        --$this->number;
    }

    public $name='';
    
    public function render()
    {
        $points = Points::all();
        
        return view('welcome', ['points' => $points])->extends('layouts.app');

    }
}
