<x-app-layout>

    <div class="container  py-8">

        <h1 class="text-4xl font-bold text-gray-600 ">{{$post->name}}</h1>

        <div class="text-lg  text-gray-600 mb-2">
            {{$post->extract}}
        </div>
    </div>

    <div class="grid grid-cols-3">
        <!-- Contenido principal -->
        <div class="col-span-2">
        
        <figure>
            <img class="w-full h-80 object-cover object-center"  src="{{Storage::url($post->image->url)}}" alt="">
        </figure>

        <div class="text-base tex-gray-500 mt-1 ">
            {{$post->body}}
        </div>

        </div>

        <!-- Contenido relacionado -->
       <!--  <aside class="">
            <h1>
                Más en {{$post->category->name}}
            </h1>
        </aside> -->
    </div>

</x-app-layout>