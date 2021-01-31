@extends('layouts.app')

@section('content')

<div class="flex justify-center">
    <div class="w-5/12 bg-white p-6 rounded-lg">
        <form method='POST' action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <label class="sr-only">Name</label>
                <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('name')border-red-500 @enderror" id="name" name="name" placeholder="Name" value="{{ old('name')}}" type="text">

                @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror

            </div>
            <div class=" mb-4">
                <label class="sr-only">Username</label>
                <input class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('username') border-red-500 @enderror" id="username" name="username" placeholder="Username" value="{{ old('username')}}" type="text">

                @error('username')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
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
            <div class="mb-4">
                <label class="sr-only">Confirm Password</label>
                <input class="bg-gray-100 border-2 w-full p-4 rounded-lg" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" type="password">


            </div>
            <div>
                <input class="bg-blue-500 text-white px-4 py-3 rounded font-medium w-full" type="submit" value="Register">
            </div>
        </form>
    </div>
</div>

@endsection