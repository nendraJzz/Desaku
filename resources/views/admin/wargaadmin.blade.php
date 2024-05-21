<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Warga Admin — Desaku</title>
  <link href="{{ asset('css/landingpage.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-300">

  {{-- Navbar --}}
  <nav class="green py-2">
    <div class="container mx-auto flex justify-between items-center">
      <div></div>
        <div class="flex items-center">
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
    <a href="{{ route('aktivitasadmin') }}" class="md:green hover:green md:text-sm text-white text-xs py-2 px-2 mx-4 md:mx-24">AKTIVITAS </a>
    <a href="{{ route('wargaadmin') }}" class="md:green hover:green md:text-sm text-white text-xs py-2 px-2 mx-4 md:mx-24 inline-block border-b-2 border-white pb-1">WARGA </a>
    <a href="{{ route('pengumumanadmin') }}" class="md:green hover:green md:text-sm text-white text-xs py-2 px-2 mx-4 md:mx-24">PENGUMUMAN </a>
  </div>
  {{-- End Navbar --}}

  {{-- Content --}}
  
  {{-- raffy-ahmad --}}
      <div class="grid grid-cols-1 mx-3 mt-5 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <div class="flex items-center bg-white p-4 shadow-md rounded-2xl">
          <img class="w-16 h-16 rounded-full mr-4" src="img/raffy-ahmad.jpg" alt="Profile Picture">
          <div>
            <div class="text-sm font-semibold">Raffy Ahmad</div>
            <div class="text-sm">Pengurus RT</div>
            <div class="text-sm">+628876854778</div>
          </div>
          <ion-icon name="chevron-forward-outline" class="w-10 h-10 cursor-pointer ml-auto fill-cureent text-green" onclick="raffi.showModal()"></ion-icon>
        <dialog id="raffi" class="modal">
          <div class="modal-box bg-white w-80">
            <form method="dialog">
              <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
            </form>
            <div class="flex flex-col justify-center">
              <div class="flex justify-center">
                <img src="img/raffy-ahmad.jpg" class="rounded-full w-24 h-24 " alt="">
              </div>
            <div class="text-center text-gray-700">
              <p class="py-2">Nama : Raffy Ahmad</p>
              <p class="py-2">Pekerjaan : Artis</p>
              <p class="py-2">No.Hp : +628876854778</p>
            </div>
            </div>
          </div>
        </dialog>
        </div>
      {{-- raffy-ahmad --}}

      {{-- ayu-ting-ting --}}
        <div class="flex items-center bg-white p-4 shadow-md rounded-2xl">
          <img class="w-16 h-16 rounded-full mr-4" src="img/ayu-ting-ting.jpg" alt="Profile Picture">
          <div>
            <div class="text-sm font-semibold">Ayu Ting Ting</div>
            <div class="text-sm">Warga</div>
            <div class="text-sm">+6287689876543</div>
          </div>
          <ion-icon name="chevron-forward-outline" class="w-10 h-10 cursor-pointer ml-auto fill-cureent text-green" onclick="ayu.showModal()"></ion-icon>
          <dialog id="ayu" class="modal">
            <div class="modal-box bg-white w-80">
              <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
              </form>
              <div class="flex flex-col justify-center">
                <div class="flex justify-center">
                  <img src="img/ayu-ting-ting.jpg" class="rounded-full w-24 h-24 " alt="">
                </div>
              <div class="text-center text-gray-700">
                <p class="py-2">Nama : Ayu Ting Ting</p>
                <p class="py-2">Pekerjaan : Artis</p>
                <p class="py-2">No.Hp : +6287689876543</p>
              </div>
              </div>
            </div>
          </dialog>
        </div>
      {{-- ayu-ting-ting --}}
      
        <div class="flex items-center bg-white p-4 shadow-md rounded-2xl">
          <img class="w-16 h-16 rounded-full mr-4" src="img/deddy-corbuzier.jpg" alt="Profile Picture">
          <div>
            <div class="text-sm font-semibold">Deddy Corbuzier</div>
            <div class="text-sm">Warga</div>
            <div class="text-sm">+6285765787654</div>
          </div class="text-green">
          <ion-icon name="chevron-forward-outline" class="w-10 h-10 cursor-pointer ml-auto fill-cureent text-green" onclick="deddy.showModal()"></ion-icon>
          <dialog id="deddy" class="modal">
            <div class="modal-box bg-white w-80">
              <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
              </form>
              <div class="flex flex-col justify-center">
                <div class="flex justify-center">
                  <img src="img/deddy-corbuzier.jpg" class="rounded-full w-24 h-24 " alt="">
                </div>
              <div class="text-center text-gray-700">
                <p class="py-2">Nama : Deddy Corbuzier</p>
                <p class="py-2">Pekerjaan : Youtuber</p>
                <p class="py-2">No.Hp : +6285765787654</p>
              </div>
              </div>
            </div>
          </dialog>
        </div>
      
        <div class="flex items-center bg-white p-4 shadow-md rounded-2xl">
          <img class="w-16 h-16 rounded-full mr-4" src="img/komeng.jpeg" alt="Profile Picture">
          <div>
            <div class="text-sm font-semibold">Komeng </div>
            <div class="text-sm">Warga</div>
            <div class="text-sm">+6281465574878</div>
          </div>
          <ion-icon name="chevron-forward-outline" class="w-10 h-10 cursor-pointer ml-auto fill-cureent text-green" onclick="komeng.showModal()"></ion-icon>
          <dialog id="komeng" class="modal">
            <div class="modal-box bg-white w-80">
              <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
              </form>
              <div class="flex flex-col justify-center">
                <div class="flex justify-center">
                  <img src="img/komeng.jpeg" class="rounded-full w-24 h-24 " alt="">
                </div>
              <div class="text-center text-gray-700">
                <p class="py-2">Nama : Alfiansyah Bustami Komeng</p>
                <p class="py-2">Pekerjaan : Anggota Dewan</p>
                <p class="py-2">No.Hp : +6281456574878</p>
              </div>
              </div>
            </div>
          </dialog>
        </div>
      
        <div class="flex items-center bg-white p-4 shadow-md rounded-2xl">
          <img class="w-16 h-16 rounded-full mr-4" src="img/Luna-Maya.jpeg" alt="Profile Picture">
          <div>
            <div class="text-sm font-semibold">Luna Maya</div>
            <div class="text-sm">Warga</div>
            <div class="text-sm">+62987854778</div>
          </div>
          <ion-icon name="chevron-forward-outline" class="w-10 h-10 cursor-pointer ml-auto fill-cureent text-green" onclick="luna.showModal()"></ion-icon>
          <dialog id="luna" class="modal">
            <div class="modal-box bg-white w-80">
              <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
              </form>
              <div class="flex flex-col justify-center">
                <div class="flex justify-center">
                  <img src="img/Luna-Maya.jpeg" class="rounded-full w-24 h-24 " alt="">
                </div>
              <div class="text-center text-gray-700">
                <p class="py-2">Nama : Luna Maya</p>
                <p class="py-2">Pekerjaan : Artis</p>
                <p class="py-2">No.Hp : +629876854778</p>
              </div>
              </div>
            </div>
          </dialog>
        </div>
      
        <div class="flex items-center bg-white p-4 shadow-md rounded-2xl">
          <img class="w-16 h-16 rounded-full mr-4" src="img/nagita-slavina.jpg" alt="Profile Picture">
          <div>
            <div class="text-sm font-semibold">Nagita Slavina</div>
            <div class="text-sm">Warga</div>
            <div class="text-sm">+62897563456</div>
          </div>
          <ion-icon name="chevron-forward-outline" class="w-10 h-10 cursor-pointer ml-auto fill-cureent text-green" onclick="nagita.showModal()"></ion-icon>
          <dialog id="nagita" class="modal">
            <div class="modal-box bg-white w-80">
              <form method="dialog">
                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
              </form>
              <div class="flex flex-col justify-center">
                <div class="flex justify-center">
                  <img src="img/nagita-slavina.jpg" class="rounded-full w-24 h-24 " alt="">
                </div>
              <div class="text-center text-gray-700">
                <p class="py-2">Nama : Nagita Slavina </p>
                <p class="py-2">Pekerjaan : Artis</p>
                <p class="py-2">No.Hp : +62897563456</p>
              </div>
              </div>
            </div>
          </dialog>
        </div>
      </div>
      {{-- End Content --}}
      <div id="popupCard" class="hidden fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-50 justify-center items-center">
        <div class="bg-white p-4 shadow-md rounded-xl">
          <button onclick="hideProfile()" class="absolute top-0 left-0 p-2 m-2 text-gray-400 hover:text-gray-600">
            <ion-icon name="arrow-back-outline"></ion-icon>
          </button>
          <div class="text-center">
            <img id="popupImage" class="w-20 h-20 rounded-full mx-auto mb-4" src="" alt="Profile Picture">
            <div id="popupName" class="text-sm "></div>
            <div id="popupRole" class="text-sm "></div>
            <div id="popupPhone" class="text-sm"></div>
          </div>
        </div>
      </div>

      <div class="relative">
        <button class="fixed bottom-4 right-4 font-bold" onclick="laporan.showModal()">
          <img src="img/opsi.png" alt="Logo" class="h-13 w-13">
        </button>
      </div>
    <dialog id="laporan" class="modal">
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

      <footer class="text-gray-500 mt-4 md:fixed bottom-3 w-full">
        <div class="container mx-auto text-center">
            <p class="text-xs md:text-sm">&copy; 2024. All Right Reserved. By Punokawan Project</p>
        </div>
    </footer>
      
    
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>   
</body>
</html>