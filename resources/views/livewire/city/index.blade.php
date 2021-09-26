<div class="bg-gray-100">
    @auth
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6  mb-6">
        <a href="{{route('city-create')}}" class="px-4 py-2 rounded-md mx-2 text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-green-500 hover:bg-green-600 active:bg-green-700 focus:ring-green-300">
            {{__U('actions.create')}}
        </a>
    </div>
    @endauth
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 ">
        @foreach($cities as $city)
            <div class="bg-white">
                <div class="p-6">
                    <h1 class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                       {{$city->name}}
                    </h1>
                    <p class="text-gray-700 my-2 hover-text-900 ">
                        {{__U('model.city.postal-code')}}: {{$city->postal_code}} <br>
                        {{__U('model.city.province')}}: {{$city->province}}
                    </p>
                    @auth
                        <a href="{{route('city-set', ['city' => $city])}}" class="px-4 py-2 rounded-md mr-2 text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-blue-500 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300">
                            {{__U('actions.edit')}}
                        </a>
                        <button wire:click="delete({{$city}})" type="submit" class="px-4 py-2 rounded-md mx-2 text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-red-500 hover:bg-red-600 active:bg-red-700 focus:ring-red-300">
                            {{__U('actions.delete')}}
                        </button>
                    @endauth
                </div>
            </div>
        @endforeach
    </div>
    @if(count($cities) == 0)
        <h1 class="text-xl ">{{__U('model.empty')}}</h1>
    @endif
</div>
