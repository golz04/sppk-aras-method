@extends('admin.layouts.app')
@section('extraCSS')
<style>
    .border-red-500{
        border: 2px solid red;
    }
    .border-pink-500:focus {
        border: 2px solid rgb(193, 64, 197);
    }
</style>
@endsection
@section('content')
<div class="w-full px-6 py-6 mx-auto" style="min-height: 90vh;">
    <div class="flex flex-wrap -mx-3">
        <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6>Cek Rekomendasi Laptop</h6>
                </div>
                <hr class="h-px mt-0 bg-transparent bg-gradient-horizontal-dark">
                <form action="{{url('kalkulasi-admin/find')}}" method="POST">
                    @csrf
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-0 overflow-x-auto">
                            <div class="mx-6 mb-4">
                                <label class="text-gray-700 ml-1" for="minimum_price">Harga Minimal : </label>
                                <input type="text" name="minimum_price" class="form-input w-full block rounded mt-1 p-2 border-2 @error('minimum_price') border-red-500 @enderror focus:outline-none border-pink-500" placeholder="Harga Minimal" value="{{old('minimum_price')}}">
                                @error('minimum_price')
                                <span class="pl-1 text-xs text-red-600 text-bold">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="p-0 overflow-x-auto">
                            <div class="mx-6 mb-4">
                                <label class="text-gray-700 ml-1" for="maximum_price">Harga Maximal : </label>
                                <input type="text" name="maximum_price" class="form-input w-full block rounded mt-1 p-2 border-2 @error('maximum_price') border-red-500 @enderror focus:outline-none border-pink-500" placeholder="Harga Minimal" value="{{old('maximum_price')}}">
                                @error('maximum_price')
                                <span class="pl-1 text-xs text-red-600 text-bold">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>
                        </div>
                        {{-- <div class="p-0 overflow-x-auto">
                            <div class="mx-6 mb-4">
                                <label class="text-gray-700 ml-1" for="memory_type">Tipe Memori : </label>
                                <select name="memory_type" class="form-input w-full block rounded mt-1 p-2 border-2 @error('memory_type') border-red-500 @enderror focus:outline-none border-pink-500">
                                    <option value="SSD"> SSD</option>
                                    <option value="HDD"> HDD</option>
                                    <option value="Hybrid"> Hybrid</option>
                                    <option value="Flash"> Flash</option>   
                                </select>
                                @error('type_name')
                                <span class="pl-1 text-xs text-red-600 text-bold">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="p-0 overflow-x-auto">
                            <div class="mx-6 mb-4">
                                <label class="text-gray-700 ml-1" for="memory">Memori : </label>
                                <input type="text" name="memory" class="form-input w-full block rounded mt-1 p-2 border-2 @error('memory') border-red-500 @enderror focus:outline-none border-pink-500" placeholder="Tipe Memori" value="{{old('memory')}}">
                                @error('memory')
                                <span class="pl-1 text-xs text-red-600 text-bold">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="p-0 overflow-x-auto">
                            <div class="mx-6 mb-4">
                                <label class="text-gray-700 ml-1" for="ram">Ram : </label>
                                <input type="text" name="ram" class="form-input w-full block rounded mt-1 p-2 border-2 @error('ram') border-red-500 @enderror focus:outline-none border-pink-500" placeholder="Ram" value="{{old('ram')}}">
                                @error('ram')
                                <span class="pl-1 text-xs text-red-600 text-bold">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>
                        </div> --}}
                        <div class="p-0 overflow-x-auto">
                            <div class="mx-6 mb-4">
                                <label class="text-gray-700 ml-1" for="inches">Ukuran : </label>
                                <input type="text" name="inches" class="form-input w-full block rounded mt-1 p-2 border-2 @error('inches') border-red-500 @enderror focus:outline-none border-pink-500" placeholder="Ukuran" value="{{old('inches')}}">
                                @error('inches')
                                <span class="pl-1 text-xs text-red-600 text-bold">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="p-0 overflow-x-auto">
                            <div class="mx-6 mb-4">
                                <label class="text-gray-700 ml-1" for="operating_system">Nama Tipe : </label>
                                <select name="type_name" class="form-input w-full block rounded mt-1 p-2 border-2 @error('operating_system') border-red-500 @enderror focus:outline-none border-pink-500">
                                    <option value="2 in 1 Convertible"> 2 in 1 Convertible</option>
                                    <option value="Carolyn Randolph"> Carolyn Randolph</option>
                                    <option value="Gaming"> Gaming</option>
                                    <option value="Netbook"> Netbook</option>
                                    <option value="Notebook"> Notebook</option>
                                    <option value="Ultrabook"> Ultrabook</option>
                                    <option value="Workstation"> Workstation</option>
                                </select>
                                @error('type_name')
                                <span class="pl-1 text-xs text-red-600 text-bold">
                                    {{$message}}
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="p-0 overflow-x-auto">
                            <div class="mr-12 mb-4 text-right mt-4">
                                <input type="submit" value="Cari" class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-size-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-fuchsia-500 text-fuchsia-500 hover:border-fuchsia-500 hover:bg-transparent hover:text-fuchsia-500 hover:opacity-75 hover:shadow-none active:bg-fuchsia-500 active:text-white active:hover:bg-transparent active:hover:text-fuchsia-500">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
        <div class="flex-none w-full max-w-full px-3">
            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
                <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                    <h6>Data List Laptop</h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">No</th>
                                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Perusahaan</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Produk</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Nama Tipe</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Ukuran (Inci)</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Resolusi Layar</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">CPU</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">RAM</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Memori</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">GPU</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">OS</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Berat</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Harga (Euros)</th>
                                    <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($getLaptop as $item)
                                <tr>
                                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"><span class="font-semibold leading-tight text-size-xs text-slate-400">{{$loop->iteration}}</span></td>
                                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"><span class="font-semibold leading-tight text-size-xs text-slate-400">{{$item->company}}</span></td>
                                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"><span class="font-semibold leading-tight text-size-xs text-slate-400">{{$item->product}}</span></td>
                                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"><span class="font-semibold leading-tight text-size-xs text-slate-400">{{$item->type_name}}</span></td>
                                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"><span class="font-semibold leading-tight text-size-xs text-slate-400">{{$item->inches}}</span></td>
                                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"><span class="font-semibold leading-tight text-size-xs text-slate-400">{{$item->screen_resolution}}</span></td>
                                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"><span class="font-semibold leading-tight text-size-xs text-slate-400">{{$item->cpu}}</span></td>
                                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"><span class="font-semibold leading-tight text-size-xs text-slate-400">{{$item->ram}}</span></td>
                                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"><span class="font-semibold leading-tight text-size-xs text-slate-400">{{$item->memory}}</span></td>
                                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"><span class="font-semibold leading-tight text-size-xs text-slate-400">{{$item->gpu}}</span></td>
                                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"><span class="font-semibold leading-tight text-size-xs text-slate-400">{{$item->operating_system}}</span></td>
                                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"><span class="font-semibold leading-tight text-size-xs text-slate-400">{{$item->weight}}</span></td>
                                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"><span class="font-semibold leading-tight text-size-xs text-slate-400">{{$item->price_euros}}</span></td>
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent"><a href="javascript:;" class="font-semibold leading-tight text-size-xs text-slate-400"> Hapus </a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection