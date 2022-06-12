@extends('admin.layouts.app')
@section('content')
<div class="w-full px-6 py-6 mx-auto" style="height: 90vh;">
    <div class="flex flex-wrap -mx-3">
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                    <p class="mb-0 font-sans font-semibold leading-normal text-size-sm">Total User</p>
                    <h5 class="mb-0 font-bold">
                        [getCountUser]
                    </h5>
                    </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-fuchsia">
                    <i class="ni ni-world text-size-lg relative top-3.5 text-white"></i>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-soft-xl rounded-2xl bg-clip-border">
            <div class="flex-auto p-4">
                <div class="flex flex-row -mx-3">
                <div class="flex-none w-2/3 max-w-full px-3">
                    <div>
                    <p class="mb-0 font-sans font-semibold leading-normal text-size-sm">Total Laptop</p>
                    <h5 class="mb-0 font-bold">
                        [getCountLaptop]
                    </h5>
                    </div>
                </div>
                <div class="px-3 text-right basis-1/3">
                    <div class="inline-block w-12 h-12 text-center rounded-lg bg-gradient-fuchsia">
                    <i class="ni ni-paper-diploma text-size-lg relative top-3.5 text-white"></i>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection