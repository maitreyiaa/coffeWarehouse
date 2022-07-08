<?php

namespace App\Http\Controllers;
use App\Models\CoffeeBean;

use Illuminate\Http\Request;

// Coffee-Beans-dedicated data fetch controller
class BeansController extends Controller
{
    // INDEX COFFEE BEANS
    public function list()
    {
        $beans = CoffeeBean::all();

        // dd($beans);

        return view('beans', [
            'beans' => $beans,
        ]);
    }

    // POST AND UPDATE INDEX COFFEE BEANS
    public function store()
    {
        // input value 'name' is required in order to POST a new CoffeeBean
        $data = request()->validate([
            'name' => 'required',
            'level' => 'required',
            'harga' => 'required|numeric',
            'proses' => 'required',
            'ketinggian' => 'required',
            'variasi' => 'required',
            'asal' => 'required'
        ]);

        // dd(request('name'));
        $CoffeeBean = new CoffeeBean();
        $CoffeeBean->name = request('name');
        $CoffeeBean->level = request('level');
        $CoffeeBean->harga = request('harga');
        $CoffeeBean->proses = request('proses');
        $CoffeeBean->ketinggian = request('ketinggian');
        $CoffeeBean->variasi = request('variasi');
        $CoffeeBean->asal = request('asal');

        $CoffeeBean->save();

        return back();

    }

    // GET SINGLE COFFEE BEANS INFO WITH ID TO EDIT
    public function edit(CoffeeBean $beans)
    {
        return view('edit', [
            'beans' => $beans,
        ]);
    }

    // UPDATE COFFEE BEANS
    public function update(CoffeeBean $beans)
    {
        // dd(request()->all());

        request()->validate([
            'name' => 'required',
            'level' => 'required',
            'harga' => 'required|numeric',
            'proses' => 'required',
            'ketinggian' => 'required',
            'variasi' => 'required',
            'asal' => 'required'
        ]);

        $beans->update([
            'name' => request('name'),
            'level' => request('level'),
            'harga' => request('harga'),
            'proses' => request('proses'),
            'ketinggian' => request('ketinggian'),
            'variasi' => request('variasi'),
            'asal' => request('asal')
        ]);

        return redirect('/');
    }

    // DELETE COFFEE BEANS
    public function delete($id)
    {
        $data = CoffeeBean::find($id);
        $data->delete();

        return redirect('/');
    }

}
