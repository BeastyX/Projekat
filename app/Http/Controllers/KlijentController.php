<?php

namespace App\Http\Controllers;

use App\Models\Klijent;
use Exception;
use Illuminate\Http\Request;

class KlijentController extends Controller
{
    public function index()
    {
        return view('klijenti.index', ["klijenti" => Klijent::latest()->paginate(5)]);
    }

    public function create()
    {
        return view('klijenti.create');
    }

    public function store(Request $request)
    {
        $klijent = new Klijent();

        $klijent->ime = $request->input('ime');
        $klijent->prezime = $request->input('prezime');
        $klijent->adresa = $request->input('adresa');
        $klijent->grad = $request->input('grad');
        $klijent->drzava = $request->input('drzava');
        $klijent->upwork_rating = 0;

        $klijent->save();
        return redirect(route('klijenti.index'));
    }

    public function edit(Klijent $klijent)
    {
        return view('klijenti.edit', ['klijent' => $klijent]);
    }

    public function update(Request $request, Klijent $klijent)
    {
        $klijent->adresa = $request->input('adresa');
        $klijent->grad = $request->input('grad');
        $klijent->drzava = $request->input('drzava');
        $klijent->upwork_rating = $request->input('upwork_rating');

        $klijent->save();
        return redirect(route('klijenti.index'));
    }

    public function destroy(Klijent $klijent)
    {
        try
        {
            $klijent->delete();

            return redirect(route('klijenti.index'));
        }
        catch(Exception $e)
        {
            return view('greska', ['greska' => $e]);
        }

    }
}
