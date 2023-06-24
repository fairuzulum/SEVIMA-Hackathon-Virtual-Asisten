<?php

namespace App\Http\Controllers;

use App\Models\Discution;
use Illuminate\Http\Request;

class DiskusiController extends Controller
{
    public function index()
    {
        $pertanyaan = Discution::all();

        return view('diskusi', compact('pertanyaan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pertanyaan' => 'required',
        ]);

        Discution::create([
            'pertanyaan' => $request->pertanyaan,
            'tanggal' => date('Y-m-d'),
            'waktu' => date('H:i:s'),
        ]);

        return redirect()->route('diskusi.index')->with('success', 'Pertanyaan berhasil ditambahkan.');
    }

    public function storeBalasan(Request $request, $id)
    {
        $request->validate([
            'balasan' => 'required',
        ]);

        $diskusi = Discution::findOrFail($id);
        $diskusi->balasan = $request->balasan;
        $diskusi->save();

        return redirect()->route('diskusi.index')->with('success', 'Balasan berhasil ditambahkan.');
    }
}
