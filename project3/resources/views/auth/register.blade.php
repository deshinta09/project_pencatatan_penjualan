<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <title>Sign Up</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body class="h-full">
    <div class="min-h-full">
    <!-- navbar -->
    <x-navbar></x-navbar>
    <!-- title content -->
    <x-header>Sign Up</x-header>

    
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

    <form action="{{ route('register') }}" method="POST" class="p-14 w-full">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}"><br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="{{ old('email') }}"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="{{ old('password') }}"><br><br>
        
        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" value="{{ old('phone') }}"><br><br>
        
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="{{ old('address') }}"><br><br>

        <label for="role">Role:</label>
        <input type="text" id="role" name="role" value="{{ old('role') }}"><br><br>

        <button type="submit" class="bg-indigo-500 p-2 hover:bg-gray-700 rounded-md px-5 py-2 text-sm font-medium hover:text-white">Sign Up</button>
    </form>
    </div>
</body>
</html>
