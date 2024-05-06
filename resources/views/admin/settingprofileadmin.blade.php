<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Setting Profile Admin - Desaku</title>
  <link href="{{ asset('css/landingpage.css') }}" rel="stylesheet">
</head>
<style>
</style>
<body>
    <nav class="green py-4">
        <div class="container mx-auto flex  items-center">
            <a href="/aktivitasadmin"><img src="img/back.png" class="ml-2" alt="" ></a>
            <p class="text-white font-semibold ml-2">Setelan</p>
        </div>
    </nav>

        <div class="w-full mt-16 flex items-center justify-center">
                <!-- Profile Image -->
                <div
                    class="mx-auto flex justify-center w-[141px] h-[141px] rounded-full bg-[url('https://foto.kontan.co.id/StXCKE_cdjxl3ync1Wq9iTMX4zg=/smart/2023/03/09/1036754397p.jpg')] bg-cover bg-center bg-no-repeat">
        
                    <div class="bg-white rounded-full w-6 h-6 text-center ml-28 mt-4">
        
                        <input type="file" name="profile" id="upload_profile" hidden required>
        
                        <label for="upload_profile" class="inline-flex cursor-pointer items-center">
                                    <svg data-slot="icon" class="w-5 h-5 text-black" fill="none" stroke-width="1.5"
                                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                        aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z">
                                        </path>
                                    </svg>
                                </label>
                    </div>
                </div>
            </div>
        </div>

      
</body>
</html>