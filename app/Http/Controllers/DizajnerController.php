<?php

namespace App\Http\Controllers;

use App\Models\Dizajner;
use Illuminate\Http\Request;

class DizajnerController extends Controller
{
    public function index()
    {
        return view('dizajneri.index', ["dizajneri" => Dizajner::latest()->paginate(5)]);
    }

    public function create()
    {
        return view('dizajneri.create');
    }

    public function store(Request $request)
    {
        $dizajner = new Dizajner();

        $dizajner->ime = $request->input('ime');
        $dizajner->tip = $request->input('tip');
        $dizajner->adresa = $request->input('adresa');
        $dizajner->grad = $request->input('grad');
        $dizajner->drzava = $request->input('drzava');
        $dizajner->opis_delatnosti = $request->input('opis_delatnosti');

        $dizajner->save();
        return redirect(route('dizajneri.index'));
    }

    public function edit(Dizajner $dizajner)
    {
        return view('dizajneri.edit', ['dizajner' => $dizajner]);
    }

    public function update(Request $request, Dizajner $dizajner)
    {
        $dizajner->adresa = $request->input('adresa');
        $dizajner->grad = $request->input('grad');
        $dizajner->drzava = $request->input('drzava');
        $dizajner->opis_delatnosti = $request->input('opis_delatnosti');

        $dizajner->save();
        return redirect(route('dizajneri.index'));
    }

    public function destroy(Dizajner $dizajner)
    {
        if($dizajner->poslovi != NULL && count($dizajner->poslovi) > 0)
        {
            $poruka = "Greška! Dizajner je vezan za sledeće poslove:<br>";
            foreach ($dizajner->poslovi as $posao) 
            {
                $poruka .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- $posao->naziv <br>";
            }
            
            $poruka .= "Prvo morate obrisati sve poslove za koje je vezan Dizajner a tek onda obrisati Dizajnera!";
            return back()->withErrors(['delete' => $poruka]);
        }
        else
        {
            $dizajner->delete();
            return redirect(route('dizajneri.index'));
        }
    }
}
