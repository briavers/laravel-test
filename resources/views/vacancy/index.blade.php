<x-app-layout>
    <div class="bg-gray-100">
        @auth
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6  mb-6">
                <a href="{{route('vacancy-create')}}" class="px-4 py-2 rounded-md text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-green-500 hover:bg-green-600 active:bg-green-700 focus:ring-green-300">
                    {{__U('actions.create')}}
                </a>
            </div>
        @endauth
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 ">
            @foreach($vacancies as $vacancy)
                <div class="bg-white">
                    <div class="p-6">
                        <a href='{{route('vacancy-show', ['vacancy' => $vacancy])}}' class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                            {{$vacancy->title}}
                        </a>
                        <p class="text-gray-700 my-2 hover-text-900 ">
                            <strong> {{__U('model.city.model')}}:</strong> {{$vacancy->city->name}} <br>
                            <strong> {{__U('model.company.model')}}:</strong> {{$vacancy->company->name}} <br>
                            <strong> {{__U('model.vacancy.summary')}}:</strong> {{$vacancy->summary}}
                        </p>
                        <div class="flex flex-row">
                            <a href="{{route('vacancy-show', ['vacancy' => $vacancy])}}" class="px-4 py-2 rounded-md mr-2 text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-purple-500 hover:bg-purple-600 active:bg-purple-700 focus:ring-purple-300">
                                {{__U('actions.show')}}
                            </a>
                        @auth
                                <a href="{{route('vacancy-edit', ['vacancy' => $vacancy])}}" class="px-4 py-2 rounded-md mx-2 text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-blue-500 hover:bg-blue-600 active:bg-blue-700 focus:ring-blue-300">
                                   {{__U('actions.edit')}}
                                </a>
                                <div>
                                    <form method="POST" action="{{ route('vacancy-delete', ['vacancy' => $vacancy]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="px-4 py-2 rounded-md mx-2 text-sm font-medium border-0 focus:outline-none focus:ring transition text-white bg-red-500 hover:bg-red-600 active:bg-red-700 focus:ring-red-300">
                                            {{__U('actions.delete')}}
                                        </button>
                                    </form>
                                </div>
                        @endauth
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            @if(count($vacancies) == 0)
                <h1 class="text-xl ">{{__U('model.empty')}}</h1>
            @else
                {{ $vacancies->links() }}
            @endif
    </div>
</x-app-layout>


