<?php

namespace App\Controllers;

use App\Models\Points;
use Livewire\Component;

class PointIndex extends Component
{
    
    public $number=0;
    public $paginate=4;
    public $search='';
    protected $queryString=['search'];
    public function increment(){
        ++$this->number;
    }
    public function decrement(){
        --$this->number;
    }
    public function loadMore(){
        $this->paginate+=4;
    }
    public function Delete($id){
        Points::find($id)->delete();
        session()->flash('status', 'Post successfully updated.');
    }
    public $name = '';
    public $address = '';

    public function findPoint(Points $point){
        $this->name=$point->name;
        $this->address=$point->address;
    }
    public function update(Points $point){

        $validatedData = $this->validate([
           'name' => 'required|min:3|max:255',
        'address'=>'required|min:3|max:255',
        ]);

        $point->update($validatedData);
    }
    public function render()
    {
        $data = Points::where('name','Like','%'.$this->search.'%')->orWhere('address','Like','%'.$this->search.'%')->latest()->paginate($this->paginate);
        return view('point-index',['points'=>$data])->extends('layouts.app');;
    }
}
