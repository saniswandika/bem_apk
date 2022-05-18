<?php

namespace App\Http\Controllers;

use App\Models\regis;
use Illuminate\Http\Request;

class regisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $products = regis::latest()->paginate(5);
    
        return view('adminHome',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'npm' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            'fakultas' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
    
        regis::create($input);
     
        return redirect('/')->with('success','Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\regis  $regis
     * @return \Illuminate\Http\Response
     */
    public function show(regis $regis)
    {
        $products = regis::all();
        print_r($products);
        // return view('views.adminHome', compact('regis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\regis  $regis
     * @return \Illuminate\Http\Response
     */
    public function edit(regis $regis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\regis  $regis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, regis $regis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\regis  $regis
     * @return \Illuminate\Http\Response
     */
    public function destroy(regis $regis)
    {
        $regis->delete();
     
        return redirect()->route('views.adminHome')
                        ->with('success','Product deleted successfully');
    }
}
