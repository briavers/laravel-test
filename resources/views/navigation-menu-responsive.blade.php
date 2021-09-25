<!-- Responsive Navigation Menu -->
<div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
    <div class="pt-2 pb-3 space-y-1">
        @auth
            <x-jet-responsive-nav-link href="{{ route('city-index') }}" :active="request()->routeIs('city-index')">
                {{ __('City') }}
            </x-jet-responsive-nav-link>
        @else
            <x-jet-responsive-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
                {{ __('login') }}
            </x-jet-responsive-nav-link>

            @if (Route::has('register'))
                <x-jet-responsive-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
                    {{ __('register') }}
                </x-jet-responsive-nav-link>
            @endif
        @endauth

    </div>

    <!-- Responsive Settings Options -->
    <div class="pt-4 pb-1 border-t border-gray-200">
        <div class="flex items-center px-4">
            @auth
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="flex-shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"
                             alt="{{ Auth::user()->name }}"/>
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            @endauth
        </div>

        @auth
        <div class="mt-3 space-y-1">
            <!-- Account Management -->
            <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                {{ __('Profile') }}
            </x-jet-responsive-nav-link>

            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-jet-responsive-nav-link>
            </form>
        </div>
        @endauth
    </div>
</div>
