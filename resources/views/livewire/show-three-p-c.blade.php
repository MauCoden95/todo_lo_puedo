<div>
    <section class="w-full min-h-0 mb-24">
        <h2 class="text-3xl text-center my-10">Computadoras y netbooks <i class="fas fa-laptop"></i></h2>
        <div class="w-3/4 min-h-full m-auto flex flex-col md:flex-row items-center justify-between">
            @foreach ($computers as $computer)
                @if (Auth::check())
                    <div href="#" class="w-72 rounded-md group relative block overflow-hidden border-2 border-red-800 p-2">
                        <img src="{{ asset('img/' . $computer->img) }}"
                            alt=""
                            class="w-auto max-h-44 m-auto mt-5 object-cover transition duration-500 group-hover:scale-105 sm:h-72" />


                        <div class="mt-4 relative border border-gray-100 bg-white p-6">
                            

                            <h3 class="mt-4 text-lg font-medium text-gray-900">{{  $computer->name }}</h3>

                            <p class="mt-1.5 text-2xl text-gray-700">{{  $computer->price }} $</p>

                            <form class="mt-4">
                                <button
                                    class="block w-full rounded bg-red-600 p-4 text-xl font-medium transition hover:scale-105">
                                    <i class="fas fa-shopping-cart"></i>
                                    Añadir al carrito
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <div href="#" class="w-72 rounded-md min-h-full group relative block overflow-hidden border-2 border-red-800 p-2">
            

                        <img src="{{ asset('img/' . $computer->img) }}"
                            alt=""
                            class="w-auto max-h-44 m-auto mt-5 object-cover transition duration-500 group-hover:scale-105 sm:h-72" />

                        <div class="mt-4 relative border border-gray-100 bg-white p-6">
                           

                            <h3 class="mt-4 text-lg font-medium text-gray-900">{{  $computer->name }}</h3>

                            <p class="mt-1.5 text-2xl text-gray-700">{{  $computer->price }} $</p>

                            
                        </div>
                    </div>
                @endif
            @endforeach
        </div>


    </section>
</div>
