<?php

namespace App\Http\Controllers;

use App\Models\Dizajner;
use App\Models\Frilenser;
use App\Models\Klijent;
use App\Models\Posao;

use Illuminate\Http\Request;

class PosaoController extends Controller
{
    public function index()
    {
        return view('poslovi.index', ["poslovi" => Posao::latest()->paginate(5)]);
    }

    public function create()
    {
        return view('poslovi.create', 
        [
            "dizajneri" => Dizajner::all(),
            "frilenseri" => Frilenser::all(),
            "klijenti" => Klijent::all()
        ]);
    }

    public function store(Request $request)
    {
        $posao = new Posao();

        $posao->naziv = $request->input('naziv');
        $posao->datum_pocetka = $request->input('datum_pocetka');
        $posao->datum_zavrsetka = $request->input('datum_zavrsetka');
        $posao->budzet = $request->input('budzet');
        $posao->opis_ideje = $request->input('opis_ideje');
        $posao->status = 0;

        $posao->frilenser_id = $request->input('frilenser_id');
        $posao->klijent_id = $request->input('klijent_id');
        $posao->dizajner_id = $request->input('dizajner_id');

        $posao->save();
        return redirect(route('poslovi.index'));
    }

    public function edit(Posao $posao)
    {
        return view('poslovi.edit', ['posao' => $posao]);
    }

    public function update(Request $request, Posao $posao)
    {
        $posao->datum_zavrsetka = $request->input('datum_zavrsetka');
        $posao->budzet = $request->input('budzet');
        $posao->opis_ideje = $request->input('opis_ideje');
        $posao->status = $request->input('status');

        $posao->save();
        return redirect(route('poslovi.index'));
    }

    public function destroy(Posao $posao)
    {
        $posao->delete();

        return redirect(route('poslovi.index'));
    }
}
