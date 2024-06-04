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
    <div class="flex justify-center pt-5 p">
        <div class="bg-white w-5/6 md:w-1/2 lg:w-1/3 xl:w-1/4 p-16 rounded-lg relative">
            <div class="flex absolute top-0 left-0 p-3">
                @if($item->user->level === "admin")
                <img src="img/raffy-ahmad.jpg" class="h-7 w-7 mt-0.5 rounded-full" alt="">
                @else
                <img src="img/ayu-ting-ting.jpg" class="h-7 w-7 mt-0.5 rounded-full" alt="">
                @endif
                <p class="text-abu2 pl-2">
                    <span class="font-semibold text-sm">{{ $item->title }}</span> <br>
                    <span class="text-abu2 text-sm mt-3">Keterangan :  {{ $item->text }}</span>
                </p>
            </div>
            <div class="">
                <div class="absolute bottom-0 left-8 p-3">
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
</body>
</html>