<header class="py-8 px-6 flex items-center justify-between bg-gradient-to-l from-blue-400 to-emerald-400 shadow-lg">
    <h2 class="text-lg font-bold text-white">{{ config('app.name') }}</h2>
    <div class="items-center space-x-6 text-white hidden sm:flex">
        <div class="flex items-center">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                </svg>
            </span>
            <span class="ml-1">{{ auth()->user()->name }}</span>
        </div>
        <div class="py-1 px-2 bg-emerald-500 rounded-full shadow-md hover:shadow-lg">
            <a href="{{ url('logout') }}" class="text-sm">
                Sign Out
            </a>
        </div>
    </div>
</header>