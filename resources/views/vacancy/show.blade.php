<x-app-layout>
    <div class="bg-gray-100">
        <div class="bg-white">
            <div class="p-6">
                <h1 class="md:text-1xl text-xl hover:text-indigo-600 transition duration-200  font-bold text-gray-900 ">
                    {{$vacancy->title}}
                </h1>

                <h2 class="text-lg font-bold text-gray-900 ">
                    {{__U('model.city.model')}}
                </h2>
                <p class="text-gray-700 my-2 hover-text-900 ">
                    {{$vacancy->city->name}}
                </p>

                <h2 class="text-lg font-bold text-gray-900 ">
                    {{__U('model.company.model')}}
                </h2>
                <p class="text-gray-700 my-2 hover-text-900 ">
                    {{$vacancy->company->name}}
                </p>

                <h2 class="text-lg font-bold text-gray-900 ">
                    {{__U('model.vacancy.type.name')}}
                </h2>
                <p class="text-gray-700 my-2 hover-text-900 ">
                    {{__u('model.vacancy.type.options.' .  $vacancy->type)}}
                </p>

                <h2 class="text-lg font-bold text-gray-900 ">
                    {{__U('model.vacancy.summary')}}
                </h2>
                <p class="text-gray-700 my-2 hover-text-900 ">
                    {{$vacancy->summary}}
                </p>

                <h2 class="text-lg font-bold text-gray-900 ">
                    {{__U('model.vacancy.description')}}
                </h2>
                <p class="text-gray-700 my-2 hover-text-900 ">
                    {{$vacancy->description}}
                </p>

                @auth
                    <div class="flex flex-row">
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
                    </div>
                @endauth
            </div>
        </div>
    </div>
</x-app-layout>


