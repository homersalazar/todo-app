<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- Flowbite --}}
        <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

        {{-- Tailwind --}}
        <script src="https://cdn.tailwindcss.com"></script>

        {{-- Font Awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        {{-- Full Calendar --}}
        <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.17/index.global.min.js"></script>
        <title>Todo App</title>
    </head>
    <body>
        @auth
            <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar" aria-controls="sidebar-multi-level-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                <span class="sr-only">Open sidebar</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                </svg>
            </button>

            <aside id="sidebar-multi-level-sidebar" class="fixed top-0 left-0 z-40 w-72 h-full transition-transform -translate-x-full sm:translate-x-0 text-sm" aria-label="Sidebar">
                <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50">
                    <ul class="space-y-2 font-medium">
                        <li class="text-lg">
                            Menu
                        </li>
                        <li>
                            <div class="relative hidden md:block">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                    <span class="sr-only">Search icon</span>
                                </div>
                                <input type="text" id="search-navbar" class="block w-full p-2 ps-10 input-xs text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Search...">
                            </div>
                        </li>
                        <li class="text-xs pt-4">
                            TASKS
                        </li>
                        <li class="ms-3">
                            <a href="/tasks/upcoming" class="flex items-center p-1 text-gray-900 rounded-lg hover:bg-gray-100 group">
                                <i class="fa-solid fa-angles-right"></i>
                                <span class="ms-3">Upcoming</span>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a href="/tasks/today" class="flex items-center p-1 text-gray-900 rounded-lg">
                                <i class="fa-solid fa-list-check"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Today</span>
                                <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full">3</span>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a href="/tasks/calendar" class="flex items-center p-1 text-gray-900 rounded-lg">
                                <i class="fa-solid fa-calendar-days"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Calendar</span>
                            </a>
                        </li>
                        <li class="ms-3">
                            <a href="/tasks/sticky_wall" class="flex items-center p-1 text-gray-900 rounded-lg">
                                <i class="fa-solid fa-note-sticky"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Sticky Wall</span>
                            </a>
                        </li>
                        <li class="text-xs pt-5">
                            LISTS
                        </li>
                        @php
                            $lists = [
                                ['name' => 'Work', 'icon' => 'fa-solid fa-briefcase'],
                                ['name' => 'Personal', 'icon' => 'fa-solid fa-user'],
                                ['name' => 'Shopping', 'icon' => 'fa-solid fa-cart-shopping'],
                            ];
                        @endphp
                        @foreach ($lists as $list)
                            <li class="ms-3">
                                <a href="#" class="flex items-center p-1 text-gray-900 rounded-lg hover:bg-gray-100 group">
                                    <i class="{{ $list['icon'] }}"></i>
                                    <span class="flex-1 ms-3 whitespace-nowrap">{{ $list['name'] }}</span>
                                    <span class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full">3</span>
                                </a>
                            </li>
                        @endforeach

                        <li class="ms-3">
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" type="button" class="flex items-center p-1 text-gray-900 rounded-lg hover:bg-gray-100 group">
                                <i class="fa-solid fa-plus"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Add New List</span>
                            </button>

                            <!-- Dropdown menu -->
                            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-72 px-2">
                                <div class="flex flex-col gap-5 px-5 py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                                    <div class="flex flex-row gap-2">
                                        <div class="flex flex-col gap-2">
                                            <label for="list-name" class="text-xs">List Name</label>
                                            <input type="text" id="list-name" class="block w-full p-2 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500" placeholder="Enter list name">
                                        </div>
                                        <div class="flex flex-col gap-2">
                                            <label for="list-color" class="text-xs">Color</label>
                                            <input type="color" id="colorPicker" value="#ff0000" class="mt-1">
                                            <input type="hidden" id="colorCode" value="#ff0000" readonly>
                                        </div>
                                    </div>
                                    <button type="button" class="w-full px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300">Create List</button>
                                </div>
                            </div>
                        </li>
                        <li class="mt-4">
                            <hr class="h-px bg-gray-700">
                        </li>
                        <li class="text-xs">
                            TAGS
                        </li>
                        <li class="flex flex-row flex-wrap gap-2">
                            <span class="bg-blue-300 text-xs font-medium px-2 py-0.5 rounded-sm">TAG 1</span>
                            <span class="bg-green-300 text-xs font-medium px-2 py-0.5 rounded-sm">TAG 2</span>
                            <span class="bg-red-300 text-xs font-medium px-2 py-0.5 rounded-sm">TAG 3</span>
                            <span class="bg-orange-300 text-xs font-medium px-2 py-0.5 rounded-sm">TAG 4</span>
                            <span class="bg-gray-300 text-xs font-medium px-2 py-0.5 rounded-sm">+ Add Tag</span>
                        </li>
                        <li class="pt-5">
                            <a href="#" class="flex items-center text-gray-900 rounded-lg">
                                <i class="fa-solid fa-sliders"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Setting</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center text-gray-900 rounded-lg">
                                <i class="fa-solid fa-right-from-bracket"></i>
                                <span class="flex-1 ms-3 whitespace-nowrap">Log out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </aside>

            <div class="p-4 sm:ml-72">
                @yield('content')
            </div>
        @else
            @yield('content')
        @endauth

        <script>
            const colorPicker = document.getElementById('colorPicker');
            const colorCode = document.getElementById('colorCode');

            colorPicker.addEventListener('input', function () {
                colorCode.value = event.target.value;
            });

            const dropdownButton = document.getElementById('dropdownDefaultButton');
            const dropdown = document.getElementById('dropdown');
            const subsequentLi = document.querySelectorAll('#sidebar-multi-level-sidebar li.mt-4');

            dropdownButton.addEventListener('click', () => {
                if (dropdown.classList.contains('hidden')) {
                    subsequentLi.forEach(li => li.classList.add('mt-32'));
                } else {
                    subsequentLi.forEach(li => li.classList.remove('mt-32'));
                }
            });
        </script>

    </body>
</html>
