<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <title>Document</title>

</head>

<body>
    <div class="alert alert-primary" role="alert">
        A simple primary alert—check it out!
    </div>
    <form method="POST" action="{{ route('product.storeProducts') }}">
        @csrf
        <input type="text" placeholder="nome" name="name">
        <input type="text" placeholder="price" name="price">
        <input type="number" placeholder="quantidade" name="quantity">
        <textarea name="description" id="" cols="30" rows="10"></textarea>

        <button type="submit">teste</button>
    </form>
</body>

</html>
