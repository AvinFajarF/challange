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
                'bensin' => 'integer',
                'jumlah' => 'integer',
                'tipe_mobil' => 'string',
            ],
            [
                'bensin.integer' => 'hanya boleh di isi angka',
                'jumlah.integer' => 'hanya boleh di isi angka',
                'tipe_mobil.string' => 'tipe mobil hanya boleh di isi string',
            ]
        );

        $data =
        [
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
        $findMobil = Mobil::find($id);
        return view("dashboard.components.mobil.FormEditMobil", ['findMobil' => $findMobil]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'bensin' => 'integer',
                'jumlah' => 'integer',
                'tipe_mobil' =>'string',
            ],
            [
                'bensin.integer' => 'hanya boleh di isi angka',
                'jumlah.integer' => 'hanya boleh di isi angka',
                'tipe_mobil.string' => 'tipe mobil hanya boleh di isi string',
            ]
        );

        $data =
        [
            'tipe_mobil' => $request->tipe_mobil,
            'bensin' => $request->bensin,
            'jumlah' => $request->jumlah,
        ];

        $findMobilEdit = Mobil::find($id);
        $findMobilEdit->update($data);
        return redirect('/dashboard/data-cars');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteMobil = Mobil::find($id);
        $deleteMobil->delete();
        return redirect('/dashboard/data-cars');
    }
}
