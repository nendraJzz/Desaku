<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Pengumuman User — Desaku</title>
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
            <a href ="{{ route('settingprofileuser') }}" class="flex items-center text-white">
                <img src="img/ayu-ting-ting.jpg" alt="Profile" class="rounded-full w-6 h-6 md:w-9 md:h-9 mr-5">
            </a>
        </div>
    </div>
</nav>


    <div class="flex green opacity-80 justify-center px-5">
        <a href="{{ route('aktivitasuser') }}" class="md:green hover:green md:text-sm text-white text-xs py-2 px-2 mx-4 md:mx-24 ">AKTIVITAS </a>
        <a href="{{ route('wargauser') }}" class="md:green hover:green md:text-sm text-white text-xs py-2 px-2 mx-4 md:mx-24 ">WARGA </a>
        <a href="{{ route('pengumumanuser') }}" class="md:green hover:green md:text-sm text-white text-xs py-2 px-2 mx-4 md:mx-24 inline-block border-b-2 border-white pb-1">PENGUMUMAN </a>
      </div>

      <div class="flex justify-center items-center md:pt-52 pt-64 text-abu2 font-bold text-lg opacity-70">
        <h1>Belum Ada Pengumuman Terbaru</h1>
      </div>

      <div class="relative">
        <button class="fixed bottom-4 right-4 font-bold" onclick="user.showModal()">
          <img src="img/opsi.png" alt="Logo" class="h-13 w-13">
        </button>
      </div>
    <dialog id="user" class="modal">
    <div class="modal-box bg-white w-80">
        <form method="dialog">
        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <div class="grid text-white text-center grid-cols-2 gap-4 p-2">
        
            <a href="{{ route('laporanpencurianuser') }}" class="bg-abuu p-5 flex flex-col justify-center items-center rounded-xl">
                <img src="/img/pencurian.png" alt="">
                <p class="text-center text-white">Pencurian</p>
            </a>
            <a  href="{{ route('laporankebakaranuser') }}" class="bg-red p-5 flex flex-col justify-center items-center rounded-xl">
                <img src="/img/kebakaran.png" alt="">
                <p>Kebakaran</p>
            </a>
            <a  href="{{ route('laporankecelakaanuser') }}" class="bg-yelow p-5 flex flex-col justify-center items-center rounded-xl">
                <img src="/img/kecelakaan.png" alt="">
                <p>Kecelakaan</p>
            </a>
            <a  href="{{ route('laporanbencanauser') }}" class="bg-gren p-5 flex flex-col justify-center items-center rounded-xl">
                <img src="/img/bencana.png" alt="">
                <p>Bencana Alam</p>
            </a>
        </div>
    </div>
    </dialog>

     <footer class="text-gray-500 mt-4 fixed bottom-3 w-full">
      <div class="container mx-auto text-center">
          <p class="text-xs md:text-sm">&copy; 2024. All Right Reserved. By Punokawan Project</p>
      </div>
  </footer>
      
</body>
</html>