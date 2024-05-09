<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <title>Setting Profile User - Desaku</title>
  <link href="{{ asset('css/landingpage.css') }}" rel="stylesheet">
</head>
<style>
</style>
<body>
    <nav class="green py-4">
        <div class="container mx-auto flex  items-center">
            <a href="/aktivitasuser"><img src="img/back.png" class="ml-2" alt="" ></a>
            <p class="text-white font-semibold ml-2">Setelan</p>
        </div>
    </nav>

        <div class="w-full mt-16 flex items-center justify-center">
                <div class="mx-auto flex justify-center w-[145px] h-[145px] rounded-full border-4 border-grn bg-[url('https://asset-a.grid.id/crop/0x0:0x0/945x630/photo/2023/10/19/snapinstaapp_393678898_18404931-20231019114517.jpg')] bg-cover bg-center bg-no-repeat">       
                    <div class="bg-grn rounded-full w-6 h-6 text-center ml-28 mt-4">
                        <input type="file" name="profile" id="upload_profile" hidden required>    
                        <label for="upload_profile" class="inline-flex cursor-pointer items-center">
                            <img src="img/icon-cam.png" class="w-5 h-5" alt="">
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center pt-24 md:pt-16">
            <div class="text-left">
              <div class="flex mb-5"><svg viewBox="0 0 24.00 24.00" class="w-6 h-6" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#3E4F4B" stroke-width="0.00024000000000000003"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill-rule="evenodd" clip-rule="evenodd" d="M16.5 7.063C16.5 10.258 14.57 13 12 13c-2.572 0-4.5-2.742-4.5-5.938C7.5 3.868 9.16 2 12 2s4.5 1.867 4.5 5.063zM4.102 20.142C4.487 20.6 6.145 22 12 22c5.855 0 7.512-1.4 7.898-1.857a.416.416 0 0 0 .09-.317C19.9 18.944 19.106 15 12 15s-7.9 3.944-7.989 4.826a.416.416 0 0 0 .091.317z" fill="#3E4F4B"></path></g></svg><span class="ml-3 font-semibold text-abu2 underline">Ayu Ting Ting</span></div>
                <div class="flex ml-1"><svg fill="#3E4F4B" class="h-5 w-5" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.639 511.639" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M504.982,376.258h-0.021c-19.435-36.715-81.472-73.813-88.725-78.059c-14.4-8.213-29.696-10.731-42.987-6.997 c-10.411,2.88-18.944,9.301-24.768,18.624c-8.107,9.664-18.155,21.035-20.309,22.933c-16.512,11.221-26.944,10.133-41.28-4.224 L183.083,224.748c-14.336-14.357-15.403-24.768-4.757-40.533c2.411-2.859,13.824-12.949,23.488-21.056 c9.323-5.824,15.723-14.357,18.624-24.768c3.691-13.333,1.195-28.587-7.125-43.221c-4.117-7.019-41.216-69.077-77.952-88.512 C113.153-5.076,86.315-1.044,68.566,16.727L45.633,39.639C4.203,81.068-46.229,169.644,81.43,297.324L214.315,430.21 c61.141,61.141,113.301,81.429,155.627,81.429c46.059,0,80.448-24.043,102.037-45.632l22.912-22.912 C512.662,425.324,516.715,398.466,504.982,376.258z"></path> </g> </g> </g></svg><span class="ml-3 font-semibold text-abu2 underline">+6287689876543</span></div>
                <div class="flex mt-6 ml-1"><svg fill="#3E4F4B" class="w-6 h-6" viewBox="0 0 32.00 32.00" version="1.1" xmlns="http://www.w3.org/2000/svg" transform="matrix(-1, 0, 0, 1, 0, 0)" stroke="#3E4F4B" stroke-width="0.00032"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.704"></g><g id="SVGRepo_iconCarrier"> <path d="M3.651 16.989h17.326c0.553 0 1-0.448 1-1s-0.447-1-1-1h-17.264l3.617-3.617c0.391-0.39 0.391-1.024 0-1.414s-1.024-0.39-1.414 0l-5.907 6.062 5.907 6.063c0.196 0.195 0.451 0.293 0.707 0.293s0.511-0.098 0.707-0.293c0.391-0.39 0.391-1.023 0-1.414zM29.989 0h-17c-1.105 0-2 0.895-2 2v9h2.013v-7.78c0-0.668 0.542-1.21 1.21-1.21h14.523c0.669 0 1.21 0.542 1.21 1.21l0.032 25.572c0 0.668-0.541 1.21-1.21 1.21h-14.553c-0.668 0-1.21-0.542-1.21-1.21v-7.824l-2.013 0.003v9.030c0 1.105 0.895 2 2 2h16.999c1.105 0 2.001-0.895 2.001-2v-28c-0-1.105-0.896-2-2-2z"></path> </g></svg><span class="ml-3 font-semibold text-abu2 "><a href="/logout">Logout</a></span></div>
            </div>
          </div>  
</body>
</html>