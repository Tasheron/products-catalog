@vite(['resources/sass/app.scss'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Products Catalog</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <h1 class="t-center mt1">Products Catalog</h1>
        <button class="btn mt3" onclick="location.href='{{ url('/product') }}'">Catalog</button>
        <button class="btn">Admin Panel</button> <!-- TODO -->
    </body>
</html>