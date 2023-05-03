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
  <div class="flex items-center justify-evenly px-6 py-8 mx-auto md:h-screen lg:py-0">
      <a href="http://127.0.0.1:8000" class="flex items-center mb-6 text-5xl font-semibold text-gray-900 dark:text-white">
          <i class="fas fa-microchip mr-3"></i> TODO LO PUEDO
      </a>
      <div class="w-full rounded-lg shadow border border-black border-2 md:mt-0 sm:max-w-md xl:p-0 bg-white">
          <div class="p-3 space-y-4 md:space-y-6 sm:p-4">
              <h1 class="text-xl font-bold text-center leading-tight tracking-tight md:text-2xl text-black">
                  Crear una cuenta nueva
              </h1>
              <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('register') }}" autocomplete="off">
                  @csrf
                  <div>
                      <label for="name" class="block text-sm font-medium text-black">Nombre completo</label>
                      <input type="text" name="name" id="name" class="border text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-amber-200 border-gray-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="xxxxxxx xxxxxxxxxx" required="">
                  </div>
                  <div>
                      <label for="email" class="block text-sm font-medium text-black">Correo electrónico</label>
                      <input type="email" name="email" id="email" class="border text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-amber-200 border-gray-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="correo@email.com" required="">
                  </div>
                  <div>
                      <label for="password" class="block text-sm font-medium text-black">Contraseña</label>
                      <input type="password" name="password" id="password" placeholder="••••••••" class="border text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-amber-200 border-gray-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div>
                      <label for="confirm-password" class="block text-sm font-medium text-black">Confirmar contraseña</label>
                      <input type="password" name="password_confirmation" id="confirm-password" placeholder="••••••••" class="border text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 bg-amber-200 border-gray-300 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                  </div>
                  <div class="flex items-start">
                      <div class="flex items-center h-5">
                        <input id="terms" aria-describedby="terms" type="checkbox" class="w-6 h-6 mt-2 border border-black rounded focus:ring-3 focus:ring-primary-300 bg-white" required="">
                      </div>
                      <div class="ml-3 text-sm">
                        <label for="terms" class="font-light text-black text-xl">Acepto los <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Términos y condiciones</a></label>
                      </div>
                  </div>
                    <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none font-medium rounded-lg text-xl px-5 py-2.5 text-center bg-red-600 hover:bg-red-400 hover:text-black">Registrarse</button>
                  <p class="text-xl font-light text-black">
                      ¿Posee una cuenta? <a href="http://127.0.0.1:8000/login" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Ingrese acá</a>
                  </p>
              </form>
          </div>
      </div>
  </div>
</section>
</body>

</html>
