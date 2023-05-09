<?php

namespace App\Http\Controllers;

use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MobilController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobil = Mobil::all();
    return view('dashboard.components.tabel-cars', ['mobil' => $mobil]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'plat_nomer' => 'integer',
                'bensin' => 'integer',
                'jumlah' => 'integer',
                'tipe_mobil' => 'string',
            ],
            [
                'plat_nomer.integer' => 'hanya boleh di isi angka',
                'bensin.integer' => 'hanya boleh di isi angka',
                'jumlah.integer' => 'hanya boleh di isi angka',
                'tipe_mobil.string' => 'tipe mobil hanya boleh di isi string',
            ]
        );

        $data =
        [
            'plat_nomer' => $request->plat_nomer,
            'tipe_mobil' => $request->tipe_mobil,
            'bensin' => $request->bensin,
            'jumlah' => $request->jumlah,
        ];

        if ($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newImagesName = Auth::user()->name . '-' . now()->timestamp . '.' . $extension;

            $request->file('image')->storeAs('images', $newImagesName);
            $request->image->move(public_path('images'), $newImagesName);
            $data['image'] = $newImagesName;
        }

        // dd($data);

        Mobil::create($data);

        return redirect('/');
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
