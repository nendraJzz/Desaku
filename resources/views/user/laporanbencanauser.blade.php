<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Laporan Bencana User - Desaku</title>
  <link href="{{ asset('css/landingpage.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-300">
  <nav class="green py-2">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/aktivitasuser"><img src="img/back.png" alt="" ></a>
        <div>
            <span class="text-sm md:text-2xl text-white ml-4 md:ml-12 font-semibold text-center md:text-left">Desaku</span>
        </div>
        <div>
            <a href ="{{ route('settingprofileuser') }}" class="flex items-center text-white">
                <img src="img/ayu-ting-ting.jpg" alt="Profile" class="rounded-full w-6 h-6 md:w-9 md:h-9 mr-5">
            </a>
        </div>
    </div>
</nav>


    <div class="flex green opacity-80 justify-center px-5">
        <a href="{{ route('aktivitasuser') }}" class="md:green hover:green md:text-sm text-white text-xs py-2 px-2 mx-4 md:mx-24 inline-block border-b-2 border-white pb-1">AKTIVITAS </a>
        <a href="{{ route('wargauser') }}" class="md:green hover:green md:text-sm text-white text-xs py-2 px-2 mx-4 md:mx-24">WARGA </a>
        <a href="{{ route('pengumumanuser') }}" class="md:green hover:green md:text-sm text-white text-xs py-2 px-2 mx-4 md:mx-24 ">PENGUMUMAN </a>
      </div>

      <div class="flex justify-center pt-5">
        <div class="bg-white w-5/6 md:w-1/2 lg:w-1/3 xl:w-1/4 p-16 rounded-lg relative">
            <div class="flex absolute top-0 left-0 p-3">
                <img src="img/icon-earth.png" class="h-6 w-6" alt="">
                <p class="text-abu2 pl-2"><span class="font-semibold">Laporkan Bencana Alam</span> <br> <span class="text-sm mt-3">Keterangan :</span></p>
            </div>
            <div class="px-5 pt-10 flex justify-center">
                <input type="text" placeholder="Laporkan bencana alam" class="input input-bordered input-xs w-64  absolute bottom-0 max-w-xs mb-3" />
                {{-- <a href="" class="relative">
                    <svg viewBox="0 0 32 32" class="absolute h-5 w-5" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#929292" stroke="#929292"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>arrow-right-circle</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set-Filled" sketch:type="MSLayerGroup" transform="translate(-310.000000, -1089.000000)" fill="#929292"> <path d="M332.535,1105.88 L326.879,1111.54 C326.488,1111.93 325.855,1111.93 325.465,1111.54 C325.074,1111.15 325.074,1110.51 325.465,1110.12 L329.586,1106 L319,1106 C318.447,1106 318,1105.55 318,1105 C318,1104.45 318.447,1104 319,1104 L329.586,1104 L325.465,1099.88 C325.074,1099.49 325.074,1098.86 325.465,1098.46 C325.855,1098.07 326.488,1098.07 326.879,1098.46 L332.535,1104.12 C332.775,1104.36 332.85,1104.69 332.795,1105 C332.85,1105.31 332.775,1105.64 332.535,1105.88 L332.535,1105.88 Z M326,1089 C317.163,1089 310,1096.16 310,1105 C310,1113.84 317.163,1121 326,1121 C334.837,1121 342,1113.84 342,1105 C342,1096.16 334.837,1089 326,1089 L326,1089 Z" id="arrow-right-circle" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
                </a> --}}
            </div>
        </div>
    </div>

      <footer class="text-gray-500 mt-4 fixed bottom-3 w-full">
        <div class="container mx-auto text-center">
            <p class="text-xs md:text-sm">&copy; 2024. All Right Reserved. By Punokawan Project</p>
        </div>
    </footer>
      
</body>
</html>