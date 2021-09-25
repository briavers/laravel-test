<div class="bg-gray-100">
    <form wire:submit.prevent="submit">
        <div class="flex flex-col mb-4">
            <div class="flex flex-col mb-4">
                <div class="flex">
                    <label for="name" class="block text-sm font-medium text-gray-700">
                        {{__U('model.city.name')}}
                    </label>
                </div>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" wire:model="city.name" id="name" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                </div>
                @error('city.name')
                <div class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="flex flex-col mb-4">
                <div class="flex">
                    <label for="province" class="block text-sm font-medium text-gray-700">
                        {{__U('model.city.province')}}
                    </label>
                </div>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" wire:model="city.province" id="province" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                </div>
                @error('city.province')
                <div class="flex items-center font-medium tracking-wide text-red-500 text-xs mt-1 ml-1">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="flex flex-col mb-4">
                <div class="flex">
                    <label for="postal-code" class="block text-sm font-medium text-gray-700">
                        {{__U('model.city.postal-code')}}
                    </label>
                </div>
                <div class="mt-1 flex rounded-md shadow-sm">
                    <input type="text" wire:model="city.postal_code" id="postal-code" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                </div>
                @error('city.postal_code')
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
