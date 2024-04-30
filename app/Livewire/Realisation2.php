<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use App\Models\ExpressionDesBessoins;
use Livewire\Component;

class Realisation2 extends Component
{
    public $Expression;
    public $selectThem = null;
    public $usersWithSameTheme;
    public $chekeddd = [];
    public $uniqueArray;
    public $unqMle;
   

    public function updatedselectThem($value)
    {
        $selectedExpression = ExpressionDesBessoins::find($value);
        $selectedTheme = $selectedExpression->theme;

        $this->usersWithSameTheme = ExpressionDesBessoins::where('theme', $selectedTheme)->orderBy("sirves")->get();
        $this->unqMle =  $this->usersWithSameTheme->unique('Mle')->values()->all();

    //  dd($this-unqMle)

    }


 



    public function render()
    {
       

        $this->Expression =  ExpressionDesBessoins::all();
        $this->uniqueArray =  $this->Expression->unique('theme')->values()->all();
        return view('livewire.realisation2');
    }
}
