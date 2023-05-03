<header class="bg-red-800">
    <div class="w-5/6 flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="https://flowbite.com" class="flex items-center">
            <span class="self-center text-3xl font-semibold whitespace-nowrap dark:text-white"><i
                    class="fas fa-microchip"></i> TODO LO PUEDO</span>
        </a>
        <div class="flex items-center">
            <div class="min-w-0 mr-5 flex items-center justify-evenly">
                <a href="tel:1158532498" class="text-lg text-white hover:underline"><i class="fas fa-phone"></i> (54 9)
                    11-5853-2498</a>
                <span class="text-lg mx-1 text-white">|</span>
                <a class="text-white hover:underline text-lg" href="mailto:execellcalderon@gmail.com"><i
                        class="fas fa-at"></i> EXECELLCALDERON@GMAIL.COM</a>
            </div>
            @if (Auth::check())
                <a href="http://127.0.0.1:8000/user/profile" class="fas fa-user text-white hover:underline z-50">
                    {{ Auth::user()->name }}
                </a>
            @else
                <div class="min-w-0 mr-5 flex items-center justify-evenly">
                    <a href="http://127.0.0.1:8000/login" class="text-lg text-white hover:underline">LOGIN</a>
                    <span class="text-xl mx-1 text-white">|</span>
                    <a href="http://127.0.0.1:8000/register" class="text-lg text-white hover:underline">REGISTRO</a>
                </div>
            @endif

        </div>
    </div>
</header>
<nav class="w-full bg-gray-50 dark:bg-gray-700">

    <div class="w-5/6 m-auto p-3 flex items-center">
        <ul class="w-full h-full flex flex-row items-center justify-between font-medium mt-0 mr-6 space-x-8 text-sm">
            <li>
                <a href="#" class="text-xl text-gray-900 dark:text-white hover:underline">INICIO</a>
            </li>
            <li>
                <a href="#" class="text-xl text-gray-900 dark:text-white hover:underline">NOSOTROS</a>
            </li>
            <li>
                <a href="#" class="text-xl text-gray-900 dark:text-white hover:underline">PRODUCTOS</a>
            </li>
            <li>
                <a href="#" class="text-xl text-gray-900 dark:text-white hover:underline">CONTACTO</a>
            </li>
        </ul>
    </div>

</nav>
