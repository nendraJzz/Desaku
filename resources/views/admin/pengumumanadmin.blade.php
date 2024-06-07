<!doctype html>
<html data-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Pengumuman Admin — Desaku</title>
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
        <a href="{{ route('aktivitasadmin') }}" class="md:green hover:green md:text-sm text-white text-xs py-2 px-2 mx-4 md:mx-24 ">AKTIVITAS </a>
        <a href="{{ route('wargaadmin') }}" class="md:green hover:green md:text-sm text-white text-xs py-2 px-2 mx-4 md:mx-24 ">WARGA </a>
        <a href="{{ route('pengumumanadmin') }}" class="md:green hover:green md:text-sm text-white text-xs py-2 px-2 mx-4 md:mx-24 inline-block border-b-2 border-white pb-1">PENGUMUMAN </a>
    </div>

    <div class="flex justify-center pt-5">
        <div class="bg-white w-5/6 md:w-1/2 lg:w-1/3 xl:w-1/4 p-4 rounded-lg">
            <div>
                <div class="flex">
                    <img src="img/message.png" class="h-6 w-7 pt-0.5" alt="">
                    <h1 class="font-semibold text-abu2 ml-2">Pengumuman</h1>
                </div>
                <p class="text-abu2 ml-7"><span class="text-sm mt-3">Keterangan :</span></p>
            </div>
            <form class="w-full mt-2" method="POST" action="{{ route('laporkanadmin') }}">
                @csrf
                <input type="text" name="title" class="hidden" value="Pengumuman" />
                <textarea name="text" class="textarea textarea-bordered w-full bg-transparent" placeholder="Laporan Pengumuman"></textarea>
                <button type="submit" class="w-full mt-2 py-2.5 bg-emerald-700 text-white text-sm font-semibold rounded-lg hover:bg-emerald-600 focus:ring-4 focus:ring-blue-300">
                    Kirim
                </button>
            </form>
        </div>
    </div>

    
    
      

      <footer class="text-gray-500 mt-4 fixed bottom-3 w-full">
        <div class="container mx-auto text-center">
            <p class="text-xs md:text-sm">&copy; 2024. All Right Reserved. By Punokawan Project</p>
        </div>
    </footer>
      
</body>
</html>