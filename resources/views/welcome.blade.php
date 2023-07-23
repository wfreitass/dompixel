<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
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
