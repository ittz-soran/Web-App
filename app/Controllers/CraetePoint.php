<?php

namespace App\Controllers;

use App\Models\Points;
use Livewire\Component;

class CraetePoint extends Component
{

    public $name = '';
    public $address = '';

    protected $rules=[
        'name' => 'required|min:3|max:255',
        'address'=>'required|min:3|max:255',
    ];

    // public function updatedname(){
        
    //     $this->resetValidation('name');
    // }
    // public function updatedaddress(){
        
    //     $this->resetValidation('address');
    // }

    public function render()
    {
        return view('craete-point');
    }

    
    public function save(){
        
        Points::create($this->validate());
    }
}
