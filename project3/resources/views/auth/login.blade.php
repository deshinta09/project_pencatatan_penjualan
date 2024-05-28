<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <title>Login</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body class="h-full">
    <div class="min-h-full">
    <!-- navbar -->
    <x-navbar></x-navbar>
    <!-- title content -->
    <x-header>Login</x-header>

    
    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST" class="p-14 w-full">
        @csrf
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="{{ old('email') }}"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="{{ old('password') }}"><br><br>

        <button type="submit" class="bg-indigo-500 p-2 hover:bg-gray-700 rounded-md px-5 py-2 text-sm font-medium hover:text-white">Login</button>

        <p>Don't have an account ? <a href="/register" class="hover:underline">Sign Up</a></p>
    </form>
    </div>
</body>
</html>
