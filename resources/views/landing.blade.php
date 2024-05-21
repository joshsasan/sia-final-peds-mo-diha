@extends('layout')
@section('content')
    <div class="container w-full h-full flex justify-center items-center bg-gray-200">
        <div class="heading text-center">
            <div id="logo" class="mb-8">
                <img src="peds.webp" alt="Pedals Mo Diha Logo" class="w-64 h-auto mx-auto">
            </div>
            <h1 class="title text-b text-4xl mb-16 opacity-50">Choices of the guitarists</h1>
        </div>
    </div>
<style>
    body {
        overflow: hidden;
    }

    #logo {
        max-width: 400px; /* Adjust as needed */
        margin: 0 auto; /* Center the container horizontally */
    }
</style>
@endsection
