<!doctype html>
<html data-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login — Desaku</title>
  @vite('resources/css/app.css')
  <link href="{{ asset('css/landingpage.css') }}" rel="stylesheet">

</head>
<style>

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');  
  
    body {
      font-family: 'Poppins', sans-serif;
    }

  </style>
<body class="flex green flex-col">
    <div class="flex justify-between items-center ">
        <a href="{{ route('interface') }}"><img src="img/back-button.png" class="mx-auto w-9 ml-2 mt-2" alt=""></a>
    </div>
    <div class="flex justify-center items-start">
        <div class="text-center">
            <img src="img/logo2.png" alt="Logo" class="mx-auto mb-2 w-16 h-auto">
            <h1 class="text-3xl font-bold text-white">Desaku</h1>
            <p class="text-white text-xs mt-1">Tetap Terhubung Dengan Warga<br>Dan Lingkungan RT Anda</p>
        </div>
    </div>
    <form action="/regist" method="POST">
      @csrf
      <div class="flex justify-center pt-10">
        <div>
            <label class="form-control w-full max-w-xs">
                <div class="label">
                  <span class="label-text text-white" >Nama</span>
                </div>
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Masukan email" class="input text-white input-bordered bg-transparent w-full max-w-xs" />
              </label>

          <label class="form-control w-full max-w-xs">
            <div class="label">
              <span class="label-text text-white">Email</span>
            </div>
            <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukan email" class="input text-white input-bordered bg-transparent w-full max-w-xs" />
          </label>
            @error('email')
                <p class="text-white text-xs">{{ $message }}</p>
            @enderror

          <label class="form-control w-full max-w-xs">
            <div class="label">
              <span class="label-text text-white">Password</span>
            </div>
            <input type="password" name="password" value="{{ old('password') }}" placeholder="Masukan password" class="input text-white input-bordered  bg-transparent  w-full max-w-xs" />
          </label>
            @error('password')
             <p class="text-white text-xs">{{ $message }}</p>
            @enderror

          <label class="form-control w-full max-w-xs">
            <div class="label">
              <span class="label-text text-white">No Hp</span>
            </div>
            <input type="text" name="nohp" value="{{ old('nohp') }}" placeholder="Masukan no hp" class="input text-white input-bordered  bg-transparent  w-full max-w-xs" />
          </label>
            @error('nohp')
                <p class="text-white text-xs">{{ $message }}</p>
            @enderror

          <label class="form-control w-full max-w-xs">
            <div class="label">
              <span class="label-text text-white">Level</span>
            </div>
            <input type="text" name="level" value="{{ old('level') }}" placeholder="Masukan level" class="input text-white input-bordered  bg-transparent  w-full max-w-xs" />
          </label>

          <div class="flex justify-center pt-5">
            <button type="submit" class="bg-white hover:bg-gray-300 text-green font-bold py-1.5 px-3 rounded-full transition duration-300 mx-auto w-64">Regist</button>
          </div>
        </div>
    </div>
  </form>
    <footer class="text-white pt-10 bottom-3 w-full">
      <div class="container mx-auto text-center">
          <p class="text-xs md:text-sm">&copy; 2024. All Right Reserved. By Punokawan Project</p>
      </div>
  </footer>
  
 
</body>
</html>
