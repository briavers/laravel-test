<x-app-layout>
    <div class="bg-gray-100">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6  mb-6">
            <a href="{{route('company-create')}}" class="px-4 py-2 rounded-md mx-2 text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-green-500 hover:bg-green-600 active:bg-green-700 focus:ring-green-300">
                {{__U('actions.create')}}
            </a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl-grid-cols-5 gap-6 ">
            @foreach($companies as $company)
                <div class="bg-white">
                    <div class="p-6">
                        <h1 class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                            {{$company->name}}
                        </h1>
                        <p class="text-gray-700 my-2 hover-text-900 ">
                            <strong> {{__U('model.city.model')}}:</strong> {{$company->city->name}} <br>
                            <strong> {{__U('model.company.description')}}:</strong> {{$company->description}}
                        </p>
                        <div class="flex flex-row">
                            <a href="{{route('company-edit', ['company' => $company])}}" class="px-4 py-2 rounded-md mr-2 text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-blue-500 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300">
                               {{__U('actions.edit')}}
                            </a>
                            <div>
                                <form method="POST" action="{{ route('company-delete', ['company' => $company]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-2 rounded-md mx-2 text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-red-500 hover:bg-red-600 active:bg-red-700 focus:ring-red-300">
                                        {{__U('actions.delete')}}
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if(count($companies) == 0)
            <h1 class="text-xl ">{{__U('model.empty')}}</h1>
        @endif
    </div>
</x-app-layout>


