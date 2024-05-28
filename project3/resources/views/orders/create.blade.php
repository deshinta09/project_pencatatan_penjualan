<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <title>Create Order</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body class="h-full">
    <div class="min-h-full">
    <!-- navbar -->
    <x-navbar></x-navbar>
    <!-- title content -->
    <x-header>Create Order</x-header>

    
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

    <form action="{{ route('orders.store') }}" method="POST" class="p-14 w-full">
        @csrf
        <label for="customer_id">Customer Id:</label>
        <input type="number" id="customer_id" name="customer_id" value="{{ old('customer_id') }}"><br><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value="{{ old('address') }}"><br><br>

        <label for="code">Code:</label>
        <input type="text" id="code" name="code" value="{{ old('code') }}"><br><br>

        <label for="subtotal">Subtotal:</label>
        <input type="number" id="subtotal" name="subtotal" value="{{ old('subtotal') }}"><br><br>

        <label for="discount">Discount:</label>
        <input type="number" id="discount" name="discount" value="{{ old('discount') }}"><br><br>

        <label for="total">Total:</label>
        <input type="number" id="total" name="total" value="{{ old('total') }}"><br><br>

        <button type="submit" class="bg-indigo-500 p-2 hover:bg-gray-700 rounded-md px-5 py-2 text-sm font-medium hover:text-white">Create</button>
    </form>
    </div>
</body>
</html>
