@extends('auth.main')

@section('title', 'Login')

@section('content')
    <div class="flex justify-center">
        {{-- site icons --}}
        <h1 class="text-xl font-bold text-lime-600">Login to continue ...</h1>
    </div>

    <div class="">
        <form action="{{ url('login') }}" method="POST" class="space-y-6">
            @csrf
            <div class="input-control">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="w-full" autofocus />
            </div>
            <div class="input-control">
                <label for="email">Password</label>
                <input type="text" id="email" name="password" class="w-full" tabindex="0"/>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="py-2 px-3 bg-indigo-700 text-base text-white rounded-full" tabindex="1">Login</button>
                <a href="" tabindex="2">Forget Password</a>
            </div>
            @if (env('APP_ENV') === 'local')
            <div>
                <a href="{{ url('local/dev/login') }}" class="mt-12 py-2 px-3 bg-red-700 text-base text-white rounded-full">&lt;/Local Developer Login&gt;</a>
            </div>
            @endif
        </form>
    </div>
@endsection