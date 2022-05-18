<?php

namespace App\Http\Controllers;
use App\Models\regis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $ajis = regis::all();
        return view('Home', compact('ajis'));
    }
    public function adminHome()
    {
        $ajis = regis::all();
        // dd($products);
        return view('adminHome', compact('ajis'));
    }
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('regis')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('admin/home');
    }
   
}
