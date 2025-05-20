@extends('layouts.app')

@section('content')
    <div class="flex flex-row w-full h-screen p-5 gap-5">
        <div role="status" class="animate-pulse w-full">
            <div class="flex items-center justify-center bg-gray-300 rounded-sm h-full">
                <svg class="w-full h-10 text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                    <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z"/>
                </svg>
            </div>
        </div>
        <div class="flex flex-col w-full items-center justify-center gap-5">
            <h1 class="text-3xl font-semibold">TODO App</h1>
            <p class="w-1/2">Lorem, ipsum dolor sit amet consectetur adipisicing elit.  ipsum ipsa ullam possimus perferendis tempore accusamus!</p>
            <a href="/users/signin" class="w-1/2 text-center text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5">Get Started</a>
            <p>Already have an account?
                <a href="/users/signin" class="hover:underline hover:underline-blue">Sign in</a>
            </p>
        </div>
    </div>
@endsection
