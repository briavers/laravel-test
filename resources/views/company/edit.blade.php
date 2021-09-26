<x-app-layout>
    <div class="bg-gray-100">
        <form method="post" action="{{route('company-put', ['company' => $company->id])}}">
            @method('PUT')
            @csrf
            <div class="flex flex-col mb-4">
                <div class="flex flex-col mb-4">
                    <div class="flex">
                        <label for="name" class="block text-sm font-medium text-gray-700">
                            {{__U('model.company.name')}}
                        </label>
                    </div>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" value='{{$company->name}}' name="name" id="name" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                    </div>
                    @error('name')
                    <div class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="flex flex-col mb-4">
                    <div class="flex">
                        <label for="description" class="block text-sm font-medium text-gray-700">
                            {{__U('model.company.description')}}
                        </label>
                    </div>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" value='{{$company->description}}' name="description" id="description" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                    </div>
                    @error('description')
                    <div class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="flex flex-col mb-4">
                    <div class="flex">
                        <label for="city" class="block text-sm font-medium text-gray-700">
                            {{__U('model.city.model')}}
                        </label>
                    </div>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <select name="city_id" id="city" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                            @foreach ($cities as $city)
                                <option value="{{$city->id}}" {{$company->city_id === $city->id ? 'selected' : ''}}>{{$city->name}} ({{$city->postal_code}})</option>
                            @endforeach
                        </select>
                    </div>
                    @error('city_id')
                    <div class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="px-4 py-2 rounded-md text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-green-500 hover:bg-green-600 active:bg-green-700 focus:ring-green-300">
                {{__U('actions.save')}}
            </button>
        </form>
    </div>

</x-app-layout>


