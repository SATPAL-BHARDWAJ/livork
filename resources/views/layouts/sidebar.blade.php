<ul class="list-reset ">
    <li class="my-2 md:my-0">
        <a href="{{ route('dashboard') }}" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
            <i class="fas fa-home fa-fw mr-3 {{ request()->routeIs('dashboard') ? 'text-indigo-400' : '' }}"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Home</span>
        </a>
    </li>
    <li class="my-2 md:my-0 ">
        <a href="{{ url('/tasks') }}" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
            <i class="fas fa-tasks fa-fw mr-3 {{ request()->is('tasks') ? 'text-indigo-400' : '' }}"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Tasks</span>
        </a>
    </li>
    <li class="my-2 md:my-0">
        <a href="{{ route('body') }}" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
            <i class="fa fa-child fa-fw mr-3 {{ request()->routeIs('body') ? 'text-indigo-400' : '' }}"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Body</span>
        </a>
    </li>
    <li class="my-2 md:my-0">
        <a href="{{ url('/play-quize') }}" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
            <i class="fas fa-brain fa-fw mr-3 {{ request()->is('play-quize') ? 'text-indigo-400' : '' }}"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Mind</span>
        </a>
    </li>
    <li class="my-2 md:my-0">
        <a href="{{ url('/reports') }}" class="block py-1 md:py-3 pl-1 align-middle text-gray-600 no-underline hover:text-indigo-400">
            <i class="fa fa-chart-area fa-fw mr-3 {{ request()->is('reports') ? 'text-indigo-400' : '' }}"></i><span class="w-full inline-block pb-1 md:pb-0 text-sm">Reports</span>
        </a>
    </li>
</ul>
