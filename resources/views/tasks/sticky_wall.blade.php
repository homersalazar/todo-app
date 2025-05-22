@extends('layouts.app')

@section('content')
    <div class="flex flex-row gap-5">
        <h1 class="text-3xl font-semibold">Sticky Wall</h1>
    </div>
    <div class="grid md:grid-cols-3 grid-cols-2 gap-4 mt-5">
        <div class="bg-blue-300 p-4 rounded-lg shadow-md min-h-64">
            <h2 class="text-xl font-semibold">Sticky Note 1</h2>
            <p class="mt-2">This is the content of sticky note 1.</p>
        </div>
        <div class="bg-orange-300 p-4 rounded-lg shadow-md min-h-64">
            <h2 class="text-xl font-semibold">Sticky Note 2</h2>
            <p class="mt-2">This is the content of sticky note 2.</p>
        </div>
        <div class="bg-yellow-300 p-4 rounded-lg shadow-md min-h-64">
            <h2 class="text-xl font-semibold">Sticky Note 3</h2>
            <p class="mt-2">This is the content of sticky note 3.</p>
        </div>
        <div class="bg-pink-300 p-4 rounded-lg shadow-md min-h-64">
            <h2 class="text-xl font-semibold">Sticky Note 3</h2>
            <p class="mt-2">This is the content of sticky note 3.</p>
        </div>
        <div class="flex justify-center items-center bg-gray-200 p-4 rounded-lg shadow-md min-h-64">
            <i class="fa-solid fa-plus fa-3x"></i>
        </div>
    </div>
@endsection
