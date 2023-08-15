@props(['game'])
<!-- Game -->
<a href="#" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
    <div>
        <div class="h-16 w-16 bg-red-50 dark:bg-red-800/20 flex items-center justify-center rounded-full">
            <img src="{{ asset($game['icon']) }}" alt="" srcset="" class="rounded-full">
        </div>
        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{ $game['name'] }}</h2>
        <p class="mt-2 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
            {{ $game['subtitle'] }}
        </p>
        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
            {{ $game['description'] }} <br/>
            <!-- Marksman -->
            <div class="flex items-center text-gray-500 dark:text-gray-400 mt-2">
                <x-roles.mm/>
                <span class="text-base ml-4">
                    {{$game['mm']}}
                </span>
            </div>
            <!-- Jungler -->
            <div class="flex items-center text-gray-500 dark:text-gray-400 mt-2">
                <x-roles.jungler/>
                <span class="text-base ml-4">
                    {{$game['jungle']}}
                </span>
            </div>
            <!-- EXP -->
            <div class="flex items-center text-gray-500 dark:text-gray-400 mt-2">
                <x-roles.exp/>
                <span class="text-base ml-4">
                    {{$game['exp']}}
                </span>
            </div>
            <!-- Mage -->
            <div class="flex items-center text-gray-500 dark:text-gray-400 mt-2">
                <x-roles.mage/>
                <span class="text-base ml-4">
                    {{$game['mid']}}
                </span>
            </div>
            <!-- Tank -->
            <div class="flex items-center text-gray-500 dark:text-gray-400 mt-2">
                <x-roles.tank/>
                <span class="text-base ml-4">
                    {{$game['tank']}}
                </span>
            </div>
        </p>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
    </svg>
</a>