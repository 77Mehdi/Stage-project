<?php

namespace App\Livewire;

use App\Models\ExpressionDesBessoins;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CollecteDesExression extends Component
{

    public $Expression;
    public $selectCheckbox = [];
   


    public function render()
    {  

        $this->Expression =  ExpressionDesBessoins::all();
        return view('livewire.collecte-des-exression');
    }



}
