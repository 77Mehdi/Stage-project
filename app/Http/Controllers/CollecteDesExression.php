<?php

namespace App\Http\Controllers;

use App\Mail\SendInvitation;
use App\Models\ExpressionDesBessoins;
use App\Models\ResoltData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CollecteDesExression extends Controller
{
    public function index(Request $req)
    {

        $path = $req->path();

        switch ($path) {
            case 'dashboard':
                $type = 'home';
                break;
            case 'expresion':
                $type = 'expresion';
                break;
            case 'collecte':
                $type = 'collecte';
                break;
            case 'realisation':
                $type = 'realisation';
        }

        return view('dashboard', [
            'type' => $type,
            'PDFdata' => []
        ]);
    }






    public function storee(Request $req)
    {
        $check = $req->input('checked_columns', []);

        $themesData = [];
        if (!is_array($check)) {
            $check = [];
        }

        // $ExpressionData = $req->input('Expression');
        //dd($req->all());
        //dd($check);

        foreach ($check as $item) {
            $item = json_decode($item, true);


            $theme = $item['theme'];
            $domain = $item['domaine'];
            $days = $item['days'];
            $id = $item['id'];

            $themeExists = false;

            foreach ($themesData as &$themeData) {
                if ($themeData['theme'] === $theme) {
                    $themeExists = true;

                    $themeData['count']++;
                    break;
                }
            }

            if (!$themeExists) {
                $themesData[] = [
                    'id' => $id,
                    'theme' => $theme,
                    'count' => 1,
                    'domain' => $domain,
                    'days' => $days
                ];
            }
        }
        $SendResoltData = [];

        foreach ($themesData as $themeData) {
            $ResoltData = new ResoltData();
            $ResoltData->id = $themeData['id'];
            $ResoltData->theme = $themeData['theme'];
            $ResoltData->count = $themeData['count'];
            $ResoltData->domain = $themeData['domain'];
            $ResoltData->days = $themeData['days'];
            $ResoltData->jht = $themeData['count'] * $themeData['days'];
            $SendResoltData[] = $ResoltData;
            // $ResoltData->save();
        }


        return view('Res', ['ResoltData' => $SendResoltData]);
    }



    public function delete($id)
    {
        $ResoltData = ExpressionDesBessoins::find($id);

        $ResoltData->delete();

        return redirect()->route('collecte')->with('success', 'Resource deleted successfully.');
    }


    public function updateReslisation(Request $request)
    {
        $data = [];
        if ($request->has('checked_columns')) {
            $checkedColumns = $request->input('checked_columns');
            foreach ($checkedColumns as $jsonString) {
                $data[] = json_decode($jsonString, true);
            }
        } else {
            return back();
        }




        return view('realisation2Res', [
            'checkedData' => $data,
        ]);
    }


    public function EmeilSend(Request $req){
       
        
            $emailDate = $req->input('emailDate');
           
         $alldata = json_decode($req->input('email'),true);

        foreach ($alldata as $jsonString) {
            Mail::to($jsonString['email'])->send(new SendInvitation($jsonString['theme'],$emailDate));
            
        }

  

        
        return redirect()->route('dashboard');
        
    }
}
