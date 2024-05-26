<!doctype html>
<html data-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Aktivitas Admin — Desaku</title>
  <link href="{{ asset('css/landingpage.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-300">
  <nav class="green py-2">
    <div class="container mx-auto flex justify-between items-center">
        <div></div>
        <div>
            <span class="text-sm md:text-2xl text-white ml-4 md:ml-12 font-semibold text-center md:text-left">Desaku</span>
        </div>
        <div>
            <a href ="{{ route('settingprofileadmin') }}" class="flex items-center text-white">
                <img src="img/raffy-ahmad.jpg" alt="Profile" class="rounded-full w-6 h-6 md:w-9 md:h-9 mr-5">
            </a>
        </div>
    </div>
</nav>

    <div class="flex green opacity-80 justify-center px-5">
        <a href="{{ route('aktivitasadmin') }}" class="md:green hover:green md:text-sm text-white text-xs py-2 px-2 mx-4 md:mx-24 inline-block border-b-2 border-white pb-1">AKTIVITAS </a>
        <a href="{{ route('wargaadmin') }}" class="md:green hover:green md:text-sm text-white text-xs py-2 px-2 mx-4 md:mx-24">WARGA </a>
        <a href="{{ route('pengumumanadmin') }}" class="md:green hover:green md:text-sm text-white text-xs py-2 px-2 mx-4 md:mx-24 ">PENGUMUMAN </a>
      </div>

    @foreach ($ak as $item)
    <div class="flex justify-center pt-5 px-5">
        <div class="bg-white w-full md:w-1/2 lg:w-1/3 xl:w-1/4 p-16 rounded-lg relative">
            <div class="flex absolute top-0 left-0 p-3">
                <img src="img/raffy-ahmad.jpg" class="h-7 w-7 mt-0.5 rounded-full" alt="">
                <p class="text-abu2 pl-2">
                    <span class="font-semibold text-sm">{{ $item->title }}</span> <br>
                    <span class="text-abu2 text-sm mt-3">Keterangan :  {{ $item->text }}<br/><br/>Laporan dari: {{ $item->user->name }}</span>
                </p>
            </div>
            <div class="pb-10">
                <div class="tooltip absolute top-0 right-0 p-3 text-xs font-semibold text-white">
                <button id="confirmButton" class="badge badge-sm badge-outline w-24 whitespace-nowrap bg-grn">Konfirmasi</button>
                </div>
                <div class="absolute bottom-0 left-8 p-3">
                <button class="text-xs text-abu2 font-semibold" onclick="document.getElementById('{{$item->id}}comment').showModal()">0 Komentar</button>
                <dialog id="{{$item->id."comment"}}" class="modal">
                <div class="modal-box">
                    <form method="dialog" class="pb-7">
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                    </form>
                    <div class="w-full bg-white rounded-lg border p-1 md:p-3 ">
                        <h3 class="font-semibold p-1">Komentar</h3>
                        <div class="flex flex-col gap-5 m-3">
                    
                            <!-- Comment -->
                            <div>
                                <div class="flex justify-between border rounded-lg">
                    
                                    <div class="p-3">
                                        <div class="flex gap-3 items-center">
                                            <img src="img/ayu-ting-ting.jpg"
                                                    class="object-cover w-10 h-10 rounded-full border-2 border-grn  shadow-grn">
                                            <h3 class="font-bold text-sm">
                                                Ayu Ting Ting
                                            </h3>
                                        </div>
                                        <p class="text-gray-600 text-sm mt-2">
                                            Ini adalah Contoh, Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio voluptatibus sed porro optio recusandae! Atque laboriosam aspernatur ut cupiditate nulla eaque aut molestias vero, soluta accusamus animi commodi quaerat velit?
                                        </p>
                                        <button class="text-right text-blue-500 text-md">Balas</button>
                                    </div>
                    
                                    {{-- Svg --}}
                                    <div class="flex flex-col items-end gap-3 pr-3 py-3">
                                        <div>
                                            <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                            </svg>
                                        </div>
                                        <div>
                                            <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </div>
                                    </div>
                    
                                </div>
                                {{-- End Comment --}}
                    
                    
                                <!-- Balas Comment  -->
                                <div class="text-gray-300 font-bold pl-14">|</div>
                                <div class="flex justify-between border ml-5  rounded-md">
                    
                                    <div class="p-3">
                                        <div class="flex gap-3 items-center">
                                            <img src="img/komeng.jpeg"
                                                    class="object-cover w-10 h-10 rounded-full border-2 border-grn  shadow-grn">
                                            <h3 class="font-bold text-sm">
                                                Komeng
                                            </h3>
                                        </div>
                                        <p class="text-gray-600 text-sm mt-2">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum voluptas non omnis voluptate quam accusamus laborum exercitationem expedita aperiam recusandae?
                                        </p>
                                    </div>
                    
                                    {{-- Svg --}}
                                    <div class="flex flex-col gap-3 pr-3 py-3">
                                        <div>
                                            <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                                            </svg>
                                        </div>
                                        <div>
                                            <svg class="w-6 h-6 text-gray-600" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </div>
                                    </div>
                    
                                </div>
                                <!-- End Balas Comment  -->
                    
                        <div class="w-full px-3 mb-2 mt-6">
                            <textarea
                                    class="bg-gray-100 rounded border text-sm border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-400 focus:outline-none focus:bg-white"
                                    name="body" placeholder="Comment" required></textarea>
                        </div>
                    
                        <div class="w-full flex justify-end px-3 my-3">
                            <button type="submit" class="text-white bg-blue-500 font-semibold rounded text-sm px-6 py-1.5 me-2 mb-2 transition duration-300 hover:bg-blue-600">Kirim</button>
                        </div>
                    
                    
                    </div>
                </div>
                </dialog>
                </div>

                <div class="absolute bottom-0 right-8 p-3">
                    <p class="text-abu2 text-xs font-semibold">{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach

     

      <div class="relative">
        <button class="fixed bottom-4 right-4 font-bold" onclick="my_modal_3.showModal()">
          <img src="img/opsi.png" alt="Logo" class="h-13 w-13">
        </button>
      </div>
    <dialog id="my_modal_3" class="modal">
    <div class="modal-box bg-white w-80">
        <form method="dialog">
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <div class="grid text-white text-center grid-cols-2 gap-4 p-2">
        
            <a href="{{ route('laporanpencurianadmin') }}" class="bg-abuu p-5 flex flex-col justify-center items-center rounded-xl">
                <img src="/img/pencurian.png" alt="">
                <p class="text-center text-white">Pencurian</p>
            </a>
            <a  href="{{ route('laporankebakaranadmin') }}" class="bg-red p-5 flex flex-col justify-center items-center rounded-xl">
                <img src="/img/kebakaran.png" alt="">
                <p>Kebakaran</p>
            </a>
            <a  href="{{ route('laporankecelakaanadmin') }}" class="bg-yelow p-5 flex flex-col justify-center items-center rounded-xl">
                <img src="/img/kecelakaan.png" alt="">
                <p>Kecelakaan</p>
            </a>
            <a  href="{{ route('laporanbencanaadmin') }}" class="bg-gren p-5 flex flex-col justify-center items-center rounded-xl">
                <img src="/img/bencana.png" alt="">
                <p>Bencana Alam</p>
            </a>
        </div>
    </div>
    </dialog>


      <footer class="text-gray-500 fixed mt-4 bottom-3 w-full">
        <div class="container mx-auto text-center">
            <p class="text-xs md:text-sm">&copy; 2024. All Right Reserved. By Punokawan Project</p>
        </div>
    </footer>
      
</body>
</html>