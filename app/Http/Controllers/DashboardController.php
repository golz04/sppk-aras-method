<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Laptop;

class DashboardController extends Controller
{
    private $param;
    public function index(){
        try {
            $this->param['getCountUser'] = User::count();
            $this->param['getCountLaptop'] = Laptop::count();
    
            return view('admin.pages.dashboard', $this->param);
        } catch (\Exception $e) {
            $response = $e->getMessage();
            return $response;
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}
