@vite(['resources/sass/app.scss'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Catalog</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <h1 class="t-center mt1">Catalog</h1>
        <div class="search mt1">
            <select id="category">
                @foreach ($properties as $property)
                    <option value="{{$property->id}}">{{ $property->name }}</option>
                @endforeach
            </select>
            <input type="text" id="search" placeholder="Enter category value">
            <button class="find">Add</button>
            <button class="submit">Find</button>
        </div>
        <div class="wrapper mt5">
            @foreach ($products as $product)
                <div class="card">
                    <div class="mt1">Name: {{ $product->name }}</div>
                    <div class="mt1">Price: {{ $product->price }}</div>
                    <div class="mt1">Count: {{ $product->count }}</div>
                    <div class="mt1 t-center bold">Properties</div>
                    @foreach ($product->properties as $property)
                        <div class="mt1">{{ $property->name }}: {{ $property->value() }}</div>
                    @endforeach
                </div>
            @endforeach
        </div>
        <div class="links mt3">{{ $products->links() }}</div>
        @vite(['resources/js/app.js'])
    </body>
</html>
