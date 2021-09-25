<div class="bg-gray-100">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl-grid-cols-5 gap-6 ">
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
                </div>
            </div>
        @endforeach
    </div>
</div>
