<?php

namespace App\Http\Controllers;

use App\Models\Frilenser;
use Exception;
use Illuminate\Http\Request;

class FrilenserController extends Controller
{
    public function index()
    {
        return view('frilenseri.index', ["frilenseri" => Frilenser::latest()->paginate(5)]);
    }

    public function create()
    {
        return view('frilenseri.create');
    }

    public function store(Request $request)
    {
        $frilenser = new Frilenser();

        $frilenser->ime = $request->input('ime');
        $frilenser->tip = $request->input('tip');
        $frilenser->adresa = $request->input('adresa');
        $frilenser->grad = $request->input('grad');
        $frilenser->drzava = $request->input('drzava');
        $frilenser->upwork_rating = 0;

        $frilenser->save();
        return redirect(route('frilenseri.index'));
    }

    public function edit(Frilenser $frilenser)
    {
        return view('frilenseri.edit', ['frilenser' => $frilenser]);
    }

    public function update(Request $request, Frilenser $frilenser)
    {
        $frilenser->adresa = $request->input('adresa');
        $frilenser->grad = $request->input('grad');
        $frilenser->drzava = $request->input('drzava');
        $frilenser->upwork_rating = $request->input('upwork_rating');

        $frilenser->save();
        return redirect(route('frilenseri.index'));
    }

    public function destroy(Frilenser $frilenser)
    {
        if($frilenser->poslovi != NULL && count($frilenser->poslovi) > 0)
        {
            $poruka = "Greška! Frilenser je vezan za sledeće poslove:<br>";
            foreach ($frilenser->poslovi as $posao) 
            {
                $poruka .= "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- $posao->naziv <br>";
            }
            
            $poruka .= "Prvo morate obrisati sve poslove za koje je vezan Frilenser a tek onda obrisati Frilensera!";
            return back()->withErrors(['delete' => $poruka]);
        }
        else
        {
            $frilenser->delete();
            return redirect(route('frilenseri.index'));
        }

    }
}
