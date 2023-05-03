<!DOCTYPE html>
<html class="overflow-x-hidden scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}"></script>

    <link rel="stylesheet" href="http://localhost/cloud-store/resources/css/Styles.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="http://localhost/cloud_store/resources/js/Main.js" defer></script>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/7483adbd94.js" crossorigin="anonymous"></script>

    <!-- Swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
</head>

<body>
    <section class="bg-red-800">
  <div class="flex flex items-center justify-evenly px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="http://127.0.0.1:8000" class="flex items-center mb-6 text-5xl font-semibold text-gray-900 dark:text-white">
          <i class="fas fa-microchip mr-3"></i> TODO LO PUEDO
      </a>
      <div class="w-full rounded-lg shadow border border-black border-2 md:mt-0 sm:max-w-md xl:p-0 bg-white">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl text-center font-bold leading-tight tracking-tight md:text-2xl text-black">
                  Ingrese a su cuenta
              </h1>
              <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}" autocomplete="off">
                @csrf
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-black">Correo electrónico</label>
                      <input type="email" name="email" id="email" class="border border-gray-300 bg-amber-200 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700  dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="correo@mail.com" required="">
                  </div>
                  <div>
                      <label for="password" class="block mb-2 text-sm font-medium text-black">Contraseña</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="border border-gray-300 bg-amber-200 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-gray-700 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  
                  <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-xl px-5 py-2.5 text-center bg-red-600 hover:bg-red-400 hover:text-black">Ingresar</button>
                  <p class="text-xl font-light text-black">
                      ¿No tiene cuenta?  <a href="http://127.0.0.1:8000/register" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Registrese acá</a>
                  </p>

                  <p class="text-xl font-light text-black">
                      ¿Ha perdido su contraseña?  <a href="{{ route('password.request') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Recupérela acá</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>
</body>

</html>
