<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;

class LaptopController extends Controller
{
    private $param;
    public function index(){
        try {
            $this->param['getCountLaptop'] = Laptop::count();
            $this->param['getLaptop'] = Laptop::all();

            return view('admin.pages.laptop', $this->param);
        } catch (\Exception $e) {
            $response = $e->getMessage();
            return $response;
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function store(Request $request)
    {
        $this->validate($request, 
            [
                'company' => 'required',
                'product' => 'required',
                'type_name' => 'required',
                'inches' => 'required',
                'screen_resolution' => 'required',
                'cpu' => 'required',
                'ram' => 'required',
                'memory' => 'required',
                'gpu' => 'required',
                'operating_system' => 'required',
                'weight' => 'required',
                'price_euros' => 'required',
            ],
            [
                'required' => ':attribute harus diisi.',
                'numeric' => ':attribute harus berisi angka'
            ],
            [
                'company' => 'Nama Perusahaan',
                'product' => 'Nama Produk',
                'type_name' => 'Nama Tipe',
                'inches' => 'Ukuran',
                'screen_resolution' => 'Resolusi Layar',
                'cpu' => 'CPU',
                'ram' => 'RAM',
                'memory' => 'Memori',
                'gpu' => 'GPU',
                'operating_system' => 'Sistem Operasi',
                'weight' => 'Berat',
                'price_euros' => 'Harga',
            ],
        );
        try {
            $laptops = new Laptop();
            $laptops->company = $request->company;
            $laptops->product = $request->product;
            $laptops->type_name = $request->type_name;
            $laptops->inches = $request->inches;
            $laptops->screen_resolution = $request->screen_resolution;
            $laptops->cpu = $request->cpu;
            $laptops->ram = $request->ram;
            $laptops->memory = $request->memory;
            $laptops->gpu = $request->gpu;
            $laptops->operating_system = $request->operating_system;
            $laptops->weight = $request->weight;
            $laptops->price_euros = $request->price_euros;
            $laptops->save();

            return redirect('laptop');

        } catch (\Exception $e) {
            $response = $e->getMessage();
            return $response;
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}
