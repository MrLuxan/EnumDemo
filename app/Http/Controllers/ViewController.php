<?php

namespace App\Http\Controllers;

use App\Models\Preson;
use App\Enums\TitleEnum;
use App\Enums\SatisfactionEnum;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ViewController extends Controller
{
    public function show() 
    {
        //return View::make('welcome', ['People' => Preson::where('title',TitleEnum::Mr)->get()]);
        return View::make('welcome', ['People' => Preson::All()]);
    }

    public function submit(Request $request)
    {
        $p = new Preson();
        $p->title = TitleEnum::from($request->title);
        $p->name = $request->name;
        $p->email = 'e@e.co';
        $p->satisfaction = SatisfactionEnum::from($request->satisfaction);        
        $p->Save();


        return View::make('welcome', ['People' => Preson::All()]);
    }
}
