<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $data['snack'] = DB::table('snack')->paginate(6);
        return view('dashboard',$data);
    }

    public function showDataPengguna()
    {
        $data['users'] = User::all();

        return view('dataPengguna',$data);
    }

    public function destroy(string $id)
    {   
        $query = DB::table('users')->where('id', $id)->delete();

        if ($query) {
            return redirect()->route('dashboard.showDataPengguna')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('dashboard.showDataPengguna')->with('failed', 'Data Gagal Dihapus');
        }
    }
}