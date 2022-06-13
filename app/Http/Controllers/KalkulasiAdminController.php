<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;

class KalkulasiAdminController extends Controller
{
    private $param;
    public function index(){
        try {
            // $this->param['getCountUser'] = User::count();
            $this->param['getLaptop'] = [];
    
            return view('admin.pages.kalkulasi', $this->param);
        } catch (\Exception $e) {
            $response = $e->getMessage();
            return $response;
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function find(Request $request)
    {
        try {
            $this->param['getLaptop'] = Laptop::where('type_name', 'like', '%'.$request->get('type_name').'%')
                                                ->where('inches', 'like', '%'.$request->get('inches').'%')
                                                ->where('inches', 'like', '%'.$request->get('inches').'%')
                                                ->whereBetween('price_euros', [$request->get('minimum_price'), $request->get('maximum_price')])
                                                ->get();
    
            return view('admin.pages.kalkulasi', $this->param);
        } catch (\Exception $e) {
            $response = $e->getMessage();
            return $response;
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}
