<?php

namespace App\Http\Controllers;

use App\Models\Collaborateure;
use App\Models\ExpressionDesBessoins as ModelsExpressionDesBessoins;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class ExpressionDesBessoins extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $req)
    {
        $Theme = Theme::all();
        $path = $req->path();

        switch ($path) {
            case 'dashboard':
                $type = 'home';
                break;
            case 'expresion':
                $type = 'expresion';
                // dd($posts);
                break;
            case 'collecte':
                $type = 'collecte';
            case 'realisation':
                    $type = 'realisation';       
        }

        return view('dashboard', [
            'type' => $type,
            'Data' => $Theme,
            'PDFdata' => []
        ]);
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      

        $Expression = new ModelsExpressionDesBessoins();


        $themeid = $request->input('theme');
        $selectedTheme = Theme::findOrFail($themeid);

        $Expression->theme = $selectedTheme->theme;
        $Expression->domaine = $request->input('domaine');
        $Expression->cataloge = $request->input('cataloge') ?? '';
        $Expression->Specifique = $request->input('Specifique') ?? '';
        $Expression->days = $selectedTheme->duree;
        
        $collaborateurId = $request->input('Mle');
        $selectedMle = Collaborateure::findOrFail($collaborateurId);
        
        $Expression->mle = $selectedMle->mle;
        $Expression->nome = $request->input('nom');
        $Expression->prenom = $request->input('prenom');
        $Expression->sirves = $request->input('service');
        $Expression->email = $selectedMle->email;
        $Expression->user_id = auth()->user()->id;
        $Expression->creation_date = now();
      
        $PDFdata = session()->get('PDFdata', []);
        $PDFdata[] = $Expression;
   



        $is_mle = ModelsExpressionDesBessoins::where('mle', $selectedMle->mle)->pluck('id')->toArray();
        $is_theme = ModelsExpressionDesBessoins::where('theme', $selectedTheme->theme)->pluck('id')->toArray();
        foreach ($is_mle as $ml) {
            foreach ($is_theme as $th) {
                if ($th === $ml) {

                    return view('dashboard', [
                        'type' => 'expresion',
                        'message' => 'this user is alrdy haveing this theme'
                    ]);
                }
            }
        }

        


        $request->session()->put('PDFdata', $PDFdata);
        $Expression->save();

        return view('dashboard', [
            'type' => 'expresion',
        ]);
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
