<div fixed-plugin>
    <a fixed-plugin-button class="bottom-7.5 right-7.5 text-size-xl z-990 shadow-soft-lg rounded-circle fixed cursor-pointer bg-white px-4 py-2 text-slate-700">
        <i class="py-2 pointer-events-none fa fa-cog"> </i>
    </a>
    <div fixed-plugin-card class="z-sticky shadow-soft-3xl w-90 ease-soft -right-90 fixed top-0 left-auto flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white bg-clip-border px-2.5 duration-200">
        <div class="px-6 pt-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
            <div class="float-left">
                <h5 class="mt-4 mb-0">Konfigurasi Tampilan</h5>
                <p>Pengaturan Dashboard</p>
            </div>
            <div class="float-right mt-6">
                <button fixed-plugin-close-button class="inline-block p-0 mb-4 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:scale-102 leading-pro text-size-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 active:opacity-85 text-slate-700">
                <i class="fa fa-close"></i>
                </button>
            </div>
        </div>
        <hr class="h-px mx-0 my-1 bg-transparent bg-gradient-horizontal-dark" />
        <div class="flex-auto p-6 pt-0 sm:pt-4">
            <div>
                <h6 class="mb-0">Warna Menu Sidebar</h6>
            </div>
            <a href="javascript:void(0)">
                <div class="my-2 text-left" sidenav-colors>
                    <span class="py-2.2-em text-size-xs px-3.6-em rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-fuchsia relative inline-block cursor-pointer whitespace-nowrap border border-solid border-slate-700 text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" active-color data-color="fuchsia" onclick="sidebarColor(this)"></span>
                    <span class="py-2.2-em text-size-xs px-3.6-em rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-dark-gray relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="dark-gray" onclick="sidebarColor(this)"></span>
                    <span class="py-2.2-em text-size-xs px-3.6-em rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-cyan relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="cyan" onclick="sidebarColor(this)"></span>
                    <span class="py-2.2-em text-size-xs px-3.6-em rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-lime relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="lime" onclick="sidebarColor(this)"></span>
                    <span class="py-2.2-em text-size-xs px-3.6-em rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-orange relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="orange" onclick="sidebarColor(this)"></span>
                    <span class="py-2.2-em text-size-xs px-3.6-em rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-red relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="red" onclick="sidebarColor(this)"></span>
                </div>
            </a>
            <div class="mt-4">
                <h6 class="mb-0">Tipe Sidebar</h6>
                <p class="leading-normal text-size-sm">Terdapat 2 Jenis Tipe Sidebar.</p>
            </div>
            <div class="flex">
                <button transparent-style-btn class="inline-block w-full px-4 py-3 mb-2 font-bold text-center text-white uppercase align-middle transition-all border border-transparent border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-fuchsia xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-fuchsia bg-fuchsia-500 hover:border-fuchsia-500" data-class="bg-transparent" active-style>Transparent</button>
                <button white-style-btn class="inline-block w-full px-4 py-3 mb-2 ml-2 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-fuchsia xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500" data-class="bg-white">White</button>
            </div>
            <p class="block mt-2 leading-normal text-size-sm xl:hidden">Hanya dapat dirubah ketika tampilan desktop</p>
            <div class="mt-4">
                <h6 class="mb-0">Navbar Tetap</h6>
            </div>
            <div class="min-h-6 mb-0.5 block pl-0">
                <input navbarFixed class="rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 checked:after:translate-x-5.25 h-5-em relative float-left mt-1 ml-auto w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain bg-left bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:translate-x-px after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right" type="checkbox" />
            </div>
        </div>
    </div>
</div>