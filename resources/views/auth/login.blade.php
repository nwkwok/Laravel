@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="w-5/12 bg-white p-6 rounded-lg">
        <form method='POST' action="{{ route('login') }}">
            @csrf
            @if (session('status')) 
            <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                {{ session('status') }}
            </div>
                
            @endif
            <div class="mb-4">
                <label class="sr-only">Email</label>
                <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('email') border-red-500 @enderror" id="email" name="email" placeholder="Email" value="{{ old('email')}}" type="text">

                @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="sr-only">Password</label>
                <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('password') border-red-500 @enderror" id="password" name="password" placeholder="Password" type="password">
                @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <input class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full" type="submit" value="Login">
            </div>
        </form>
    </div>
</div>

@endsection