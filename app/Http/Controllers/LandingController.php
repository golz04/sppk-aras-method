<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laptop;

class LandingController extends Controller
{
    private $param;
    public function redirects(){
        try {
            return redirect('/rekomendasi');
        } catch (\Exception $e) {
            $response = $e->getMessage();
            return $response;
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    public function index(){
        try {
            return view('welcome');
        } catch (\Exception $e) {
            $response = $e->getMessage();
            return $response;
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }

    function changeRam($memory) {
        $manipulate = 0;
        if ($memory == 'Flash'){
            $manipulate = 1;
        } elseif ($memory == 'SSD') {
            $manipulate = 0.7;
        } elseif ($memory == 'Hybrid') {
            $manipulate = 0.5;
        } elseif ($memory == 'HDD') {
            $manipulate = 0.3;
        }
        return $manipulate;
    }

    public function find(Request $request)
    {
        try {
            $priceMinim = (int)$request->get('minimum_price');
            $priceMax = (int)$request->get('maximum_price');
            $this->param['getLaptop'] = Laptop::where('type_name', 'like', '%'.$request->get('type_name').'%')
                                                ->where('inches', 'like', '%'.$request->get('inches').'%')
                                                // ->where('memory', 'like', '%'.$request->get('memory').'%')
                                                // ->where('ram', 'like', '%'.$request->get('ram').'%')
                                                // ->where('memory_type', 'like', '%'.$request->get('memory_type').'%')
                                                ->whereBetween('price_euros', [$priceMinim, $priceMax])
                                                ->get();
            
            // $this->param['getLaptop'] = Laptop::where('type_name', 'like', '%notebook%')
            //                                     ->where('inches', 'like', '%15.6%')
            //                                     // ->where('memory', 'like', '%'.$request->get('memory').'%')
            //                                     // ->where('ram', 'like', '%'.$request->get('ram').'%')
            //                                     // ->where('memory_type', 'like', '%'.$request->get('memory_type').'%')
            //                                     ->whereBetween('price_euros', [1000000, 7000000])
            //                                     ->get();

            // startDataAlternatif
            $dataAlternatif = array();
            $noAlternatif = 1;
            foreach ($this->param['getLaptop'] as $k => $v) {
                array_push(
                    $dataAlternatif,
                    [
                        'id' => $v->id,
                        // 'memori' => $v->memory_type,
                        'memori_bobot' => $this->changeRam($v->memory_type),
                        'memori_size' => (int)$v->memory,
                        'ram' => (int)$v->ram,
                        'berat' => (int)$v->weight,
                        'harga' => (int)$v->price_euros,
                    ]
                );
            }
            $countAlternatif = count($dataAlternatif);
            // dd($dataAlternatif);
            // endDataAlternatif

            if ($dataAlternatif == NULL || $dataAlternatif == '') {
                dd("Tidak Ada Rekomendasi Yang cocok");
            }

            // startNilaiPatokan
            $temp['C1'] = array(); //bobot_memori
            for ($i=0; $i < $countAlternatif; $i++) { 
                array_push($temp['C1'], $dataAlternatif[$i]['memori_bobot']);
            }
            $temp['C2'] = array(); //kapasitas_memori
            for ($i=0; $i < $countAlternatif; $i++) { 
                array_push($temp['C2'], $dataAlternatif[$i]['memori_size']);
            }
            $temp['C3'] = array(); //ram
            for ($i=0; $i < $countAlternatif; $i++) { 
                array_push($temp['C3'], $dataAlternatif[$i]['ram']);
            }
            $temp['C4'] = array(); //berat
            for ($i=0; $i < $countAlternatif; $i++) { 
                array_push($temp['C4'], $dataAlternatif[$i]['berat']);
            }
            $temp['C5'] = array(); //harga
            for ($i=0; $i < $countAlternatif; $i++) { 
                array_push($temp['C5'], $dataAlternatif[$i]['harga']);
            }

            $setNilaiPatokan['C1'] = max($temp['C1']);
            $setNilaiPatokan['C2'] = max($temp['C2']);
            $setNilaiPatokan['C3'] = max($temp['C3']);
            $setNilaiPatokan['C4'] = min($temp['C4']);
            $setNilaiPatokan['C5'] = min($temp['C5']); 
            // dd($setNilaiPatokan);
            // endNilaiPatokan
            
            // dataReady
            $dataReady = $dataAlternatif;
            array_unshift(
                $dataReady,
                [
                    'id' => '_patokan',
                    'memori_bobot' => $setNilaiPatokan['C1'],
                    'memori_size' => $setNilaiPatokan['C2'],
                    'ram' => $setNilaiPatokan['C3'],
                    'berat' => $setNilaiPatokan['C4'],
                    'harga' => $setNilaiPatokan['C5'],
                ]
            );
            // dd($dataReady);
            // endDataReady

            // nomalisasi
            $dataSum['C1'] = array_sum($temp['C1']);
            $dataSum['C2'] = array_sum($temp['C2']);
            $dataSum['C3'] = array_sum($temp['C3']);
            $dataSum['C4'] = array_sum($temp['C4']);
            $dataSum['C5'] = array_sum($temp['C5']);
            
            $dataNormalisasiSementara = array();
            $noAlternatif = 1;
            foreach ($this->param['getLaptop'] as $k => $v) {
                array_push(
                    $dataNormalisasiSementara,
                    [
                        'id' => $v->id,
                        // 'memori' => $v->memory_type,
                        'memori_bobot' => $this->changeRam($v->memory_type)/$dataSum['C1'],
                        'memori_size' => (int)$v->memory/$dataSum['C2'],
                        'ram' => (int)$v->ram/$dataSum['C3'],
                        'berat' => (int)$v->weight/$dataSum['C4'],
                        'harga' => (int)$v->price_euros/$dataSum['C5'],
                    ]
                );
            }

            $setNilaiPatokanNormalisasiSementara['C1'] = max($temp['C1']);
            $setNilaiPatokanNormalisasiSementara['C2'] = max($temp['C2']);
            $setNilaiPatokanNormalisasiSementara['C3'] = max($temp['C3']);
            $setNilaiPatokanNormalisasiSementara['C4'] = min($temp['C4']);
            $setNilaiPatokanNormalisasiSementara['C5'] = min($temp['C5']); 
            $dataNormalisasiSementaraDenganPatokan = $dataNormalisasiSementara;
            array_unshift(
                $dataNormalisasiSementaraDenganPatokan,
                [
                    'id' => '_patokan',
                    'memori_bobot' => $setNilaiPatokanNormalisasiSementara['C1']/$dataSum['C1'],
                    'memori_size' => $setNilaiPatokanNormalisasiSementara['C2']/$dataSum['C2'],
                    'ram' => $setNilaiPatokanNormalisasiSementara['C3']/$dataSum['C3'],
                    'berat' => $setNilaiPatokanNormalisasiSementara['C4']/$dataSum['C4'],
                    'harga' => $setNilaiPatokanNormalisasiSementara['C5']/$dataSum['C5'],
                ]
            );
            // dd($dataNormalisasiSementaraDenganPatokan);
            // endNormalisasi

            // normalisasiBobotSementara
            $bobot['C1'] = 0.2;
            $bobot['C2'] = 0.15;
            $bobot['C3'] = 0.2;
            $bobot['C4'] = 0.2;
            $bobot['C5'] = 0.25;

            $dataNormalisasiBobotSementara = array();
            $noAlternatif = 1;
            foreach ($this->param['getLaptop'] as $k => $v) {
                array_push(
                    $dataNormalisasiBobotSementara,
                    [
                        'id' => $v->id,
                        // 'memori' => $v->memory_type,
                        'memori_bobot' => $this->changeRam($v->memory_type)/$dataSum['C1']/$bobot['C1'],
                        'memori_size' => (int)$v->memory/$dataSum['C2']/$bobot['C2'],
                        'ram' => (int)$v->ram/$dataSum['C3']/$bobot['C3'],
                        'berat' => (int)$v->weight/$dataSum['C4']/$bobot['C4'],
                        'harga' => (int)$v->price_euros/$dataSum['C5']/$bobot['C5'],
                    ]
                );
            }

            $setNilaiPatokanNormalisasiBobotSementara['C1'] = max($temp['C1']);
            $setNilaiPatokanNormalisasiBobotSementara['C2'] = max($temp['C2']);
            $setNilaiPatokanNormalisasiBobotSementara['C3'] = max($temp['C3']);
            $setNilaiPatokanNormalisasiBobotSementara['C4'] = min($temp['C4']);
            $setNilaiPatokanNormalisasiBobotSementara['C5'] = min($temp['C5']); 
            $dataNormalisasiBobotSementaraDenganPatokan = $dataNormalisasiBobotSementara;
            array_unshift(
                $dataNormalisasiBobotSementaraDenganPatokan,
                [
                    'id' => '_patokan',
                    'memori_bobot' => $setNilaiPatokanNormalisasiBobotSementara['C1']/$dataSum['C1']/$bobot['C1'],
                    'memori_size' => $setNilaiPatokanNormalisasiBobotSementara['C2']/$dataSum['C2']/$bobot['C2'],
                    'ram' => $setNilaiPatokanNormalisasiBobotSementara['C3']/$dataSum['C3']/$bobot['C3'],
                    'berat' => $setNilaiPatokanNormalisasiBobotSementara['C4']/$dataSum['C4']/$bobot['C4'],
                    'harga' => $setNilaiPatokanNormalisasiBobotSementara['C5']/$dataSum['C5']/$bobot['C5'],
                ]
            );
            // dd($dataNormalisasiBobotSementaraDenganPatokan);
            // endNormalisasiBobotSementara

            // normalisasiFinal
            $normalisasiFinalSI = $dataNormalisasiBobotSementaraDenganPatokan;
            $dataNomalisasiFinalSI = array();
            $countNormalisasiFinalSI = count($normalisasiFinalSI);
            for ($i=0; $i < $countNormalisasiFinalSI; $i++) { 
                array_push($dataNomalisasiFinalSI,
                    [
                        'id' => $normalisasiFinalSI[$i]['id'],
                        'memori_bobot' => $normalisasiFinalSI[$i]['memori_bobot'],
                        'memori_size' => $normalisasiFinalSI[$i]['memori_size'],
                        'ram' => $normalisasiFinalSI[$i]['ram'],
                        'berat' => $normalisasiFinalSI[$i]['berat'],
                        'harga' => $normalisasiFinalSI[$i]['harga'],
                        'Si' => $normalisasiFinalSI[$i]['memori_bobot']+$normalisasiFinalSI[$i]['memori_size']+$normalisasiFinalSI[$i]['ram']+$normalisasiFinalSI[$i]['berat']+$normalisasiFinalSI[$i]['harga'],
                    ]
                );
            }
            $patokanSI = $dataNomalisasiFinalSI[0]['Si'];
            $dataNormalisasiFinalSIKI = array();
            $countNormalisasiFinalSI = count($normalisasiFinalSI);
            for ($i=1; $i < $countNormalisasiFinalSI; $i++) { 
                array_push($dataNormalisasiFinalSIKI,
                    [
                        'id' => $dataNomalisasiFinalSI[$i]['id'],
                        'memori_bobot' => $dataNomalisasiFinalSI[$i]['memori_bobot'],
                        'memori_size' => $dataNomalisasiFinalSI[$i]['memori_size'],
                        'ram' => $dataNomalisasiFinalSI[$i]['ram'],
                        'berat' => $dataNomalisasiFinalSI[$i]['berat'],
                        'harga' => $dataNomalisasiFinalSI[$i]['harga'],
                        'Si' => $dataNomalisasiFinalSI[$i]['Si'],
                        'Ki' => $dataNomalisasiFinalSI[$i]['Si']/$patokanSI,
                    ]
                );
            }

            array_multisort(array_column($dataNormalisasiFinalSIKI, 'Ki'), SORT_DESC, $dataNormalisasiFinalSIKI);
            $this->param['dataUrutFinal'] = (object) $dataNormalisasiFinalSIKI;
            // dd($this->param['dataUrutFinal']);
            // dd($dataNormalisasiFinalSIKI);
            // endNormalisasiFinal
    
            // return view('admin.pages.kalkulasi', ['getLaptop' => $this->param['getLaptop'], 'dataUrutFinal' => $dataNormalisasiFinalSIKI]);
            return view('rekomendasi', $this->param);
        } catch (\Exception $e) {
            $response = $e->getMessage();
            return $response;
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->back()->withError('Terjadi kesalahan pada database', $e->getMessage());
        }
    }
}
