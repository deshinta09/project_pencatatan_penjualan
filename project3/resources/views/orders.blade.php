<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Order</title>
</head>
<body class="h-full">
    <div class="min-h-full">
        <!-- navbar -->
        <x-navbar></x-navbar>
        <!-- title content -->
        <x-header>Order</x-header>
    <!-- table -->
    <div class="p-14">
        <table class="table-auto w-full text-center">
            <thead class="border border-indigo-600">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Code</th>
                    <th scope="col">Date</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Address</th>
                    <th scope="col">Subtotal</th>
                    <th scope="col">Doscount</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                
                <tr class="border-b border-indigo-300">
                    <td scope="col">{{ $order['id'] }}</td>
                    <td scope="col">{{ $order['code'] }}</td>
                    <td scope="col">{{ $order->created_at->format('j F Y') }}</td>
                    <td scope="col">{{ $order['customer_id'] }}</td>
                    <td scope="col">{{ $order['address'] }}</td>
                    <td scope="col">{{ $order['subtotal'] }}</td>
                    <td scope="col">{{ $order['discount'] }}%</td>
                    <td scope="col">{{ $order['total'] }}</td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    <!-- end navbar -->

<!--<main>
        <div class="mx-auto max-w-7xl py-6 sm:px-60 lg:px-70">
            <article class="py-8 max-w-screen-md border-b border-gray-400">
                <h3 class="mb-1 text-3-1 tracking-tight fond-bold text-gray-900">Deshinta</h3>
                <div class="text-base text-gray-500">
                    <p>Purworejo, 20 Mei 2024</p> 
                </div>
                <div>
                    <p>code     : 123123</p>
                    <p>Subtotal : Rp 200.000,-</p>
                    <p>Discout  : 0 % </p>
                    <p>Total    : Rp 200.000,-</p>
                </div>
                <a href="#" class="font-medium text-blue-500 hover:underline">Read More &raquo;</a>
            </article>
        </div>
    </main> -->
</body>
</html>