<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}

            @keyframes cube {
                from {
                    transform: scale(0) rotate(0deg) translate(-50%, -50%);
                    opacity: 1;
                }
                to {
                    transform: scale(20) rotate(960deg) translate(-50%, -50%);
                    opacity: 0;
                }
            }

            .background-custom {
                width: 100vw;
                height: 100vh;
                top: 0;
                left: 0;
                margin: 0;
                padding: 0;
                background: #d6e4ff;
            }
            .background-custom li {
                position: absolute;
                top: 80vh;
                left: 45vw;
                width: 10px;
                height: 10px;
                border: solid 1px #c0cde5;
                color: transparent;
                transform-origin: top left;
                transform: scale(0) rotate(0deg) translate(-50%, -50%);
                animation: cube 7s ease-in forwards infinite;
            }
            undefined
            .background-custom li:nth-child(0) {
                animation-delay: 0s;
                left: 90vw;
                top: 41vh;
            }

            .background-custom li:nth-child(1) {
                animation-delay: 2s;
                left: 31vw;
                top: 52vh;
            }

            .background-custom li:nth-child(2) {
                animation-delay: 4s;
                left: 49vw;
                top: 67vh;
                border-color: #ebfaff;
            }

            .background-custom li:nth-child(3) {
                animation-delay: 6s;
                left: 84vw;
                top: 92vh;
                border-color: #ebfaff;
            }

            .background-custom li:nth-child(4) {
                animation-delay: 8s;
                left: 95vw;
                top: 25vh;
                border-color: #ebfaff;
            }

            .background-custom li:nth-child(5) {
                animation-delay: 10s;
                left: 25vw;
                top: 96vh;
            }

            .background-custom li:nth-child(6) {
                animation-delay: 12s;
                left: 59vw;
                top: 13vh;
                border-color: #ebfaff;
            }

            .background-custom li:nth-child(7) {
                animation-delay: 14s;
                left: 7vw;
                top: 17vh;
            }

            .background-custom li:nth-child(8) {
                animation-delay: 16s;
                left: 60vw;
                top: 36vh;
            }

            .background-custom li:nth-child(9) {
                animation-delay: 18s;
                left: 36vw;
                top: 28vh;
                border-color: #ebfaff;
            }

            .background-custom li:nth-child(10) {
                animation-delay: 20s;
                left: 68vw;
                top: 54vh;
                border-color: #ebfaff;
            }

            .background-custom li:nth-child(11) {
                animation-delay: 22s;
                left: 17vw;
                top: 4vh;
                border-color: #ebfaff;
            }

            .background-custom li:nth-child(12) {
                animation-delay: 24s;
                left: 45vw;
                top: 79vh;
                border-color: #ebfaff;
            }

            .background-custom li:nth-child(13) {
                animation-delay: 26s;
                left: 77vw;
                top: 63vh;
            }

            .background-custom li:nth-child(14) {
                animation-delay: 28s;
                left: 1vw;
                top: 84vh;
            }

        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="antialiased bg-slate-200 px-20 background-custom overflow-x-hidden">
        <div class="grid grid-cols-1 gap-4 content-center">
            <h1 class="font-black text-5xl text-center bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 text-transparent bg-clip-text mt-20">SISTEM REKOMENDASI LAPTOP</h1>
            <h5 class="font-bold text-center text-purple-600">Metode ARAS (Additive Ratio Assessment)</h5>
            <div class="bg-slate-200">
                <div class="relative flex flex-col min-w-0 mt-26 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
                    <div class="pb-0 mb-0 bg-transparent border-b-0 rounded-t-2xl">
                        <p class="mb-0 text-center md:text-left">List Rekomendasi Laptop</p>
                    </div>
                    <div class="flex-auto">
                        <div class="flex flex-col">
                            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="overflow-x-auto">
                                        <table class="min-w-full">
                                            <thead>
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
                                                <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-size-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Harga (Rupiah)</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($dataUrutFinal as $key => $itemFinal)
                                                    @php
                                                        $number = 0;
                                                    @endphp    
                                                    @foreach ($getLaptop as $item)  
                                                        @if ($itemFinal['id'] == $item->id)  
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
                                                        </tr>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </body>
</html>
