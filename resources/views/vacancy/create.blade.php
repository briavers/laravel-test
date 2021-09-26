<x-app-layout>
    <div class="bg-gray-100">
        <form method="POST" action="{{route('vacancy-store')}}">
            @csrf
            <div class="flex flex-col mb-4">

                <div class="flex flex-col mb-4">
                    <div class="flex">
                        <label for="title" class="block text-sm font-medium text-gray-700">
                            {{__U('model.vacancy.title')}}
                        </label>
                    </div>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="title" id="title" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                    </div>
                    @error('title')
                    <div class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="flex flex-col mb-4">
                    <div class="flex">
                        <label for="summary" class="block text-sm font-medium text-gray-700">
                            {{__U('model.vacancy.summary')}}
                        </label>
                    </div>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <input type="text" name="summary" id="summary" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                    </div>
                    @error('summary')
                    <div class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="flex flex-col mb-4">
                    <div class="flex">
                        <label for="description" class="block text-sm font-medium text-gray-700">
                            {{__U('model.vacancy.description')}}
                        </label>
                    </div>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <textarea name="description" id="description" rows='4' class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                        </textarea>
                    </div>
                    @error('description')
                    <div class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="flex flex-col mb-4">
                    <div class="flex">
                        <label for="type" class="block text-sm font-medium text-gray-700">
                            {{__U('model.vacancy.type.name')}}
                        </label>
                    </div>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <select name="type" id="type" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                            @foreach ($types as $type)
                                <option value="{{$type}}"> {{__u('model.vacancy.type.options.' . $type)}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('type_id')
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
                                <option value="{{$city->id}}">{{$city->name}} ({{$city->postal_code}})</option>
                            @endforeach
                        </select>
                    </div>
                    @error('city_id')
                    <div class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="flex flex-col mb-4">
                    <div class="flex">
                        <label for="company" class="block text-sm font-medium text-gray-700">
                            {{__U('model.company.model')}}
                        </label>
                    </div>
                    <div class="mt-1 flex rounded-md shadow-sm">
                        <select name="company_id" id="company" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                            @foreach ($companies as $company)
                                <option value="{{$company->id}}">{{$company->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    @error('company_id')
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


