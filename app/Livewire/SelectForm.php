<?php

namespace App\Livewire;

use App\Models\Collaborateure;
use App\Models\Theme;
use Livewire\Component;

use Illuminate\Support\Facades\Session;

class SelectForm extends Component
{

    public $theme;
    public $selectedValeu = null;
    public $data = null ;

    public $Collaborateure;
    public $selectCollaborateure = null;
    public $dataCollaborateure = null;

    public $PDFdata;
    public $message;
   
    

    public function mount(){
        $this->theme = Theme::all();
        $this->Collaborateure = Collaborateure::all();
    }
    
    public function updatedselectCollaborateure($id){
        $this->dataCollaborateure = Collaborateure::where('id', $id)->get();
    }


    public function updatedSelectedValeu($id){
       $this->data = Theme::where('id', $id)->get();
       //dd($this->data);
    }

    public function sendPDFDATA()
    {
        $this->PDFdata = Session::get('PDFdata');
    }

    

    public function render()
    {
       
        return view('livewire.select-form' );
    }
}
