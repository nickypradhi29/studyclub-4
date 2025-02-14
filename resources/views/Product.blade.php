<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach ($products as $product)
    <p>ID: {{$product -> id}}</p>
        <p>Code : {{$product ->code }}</p>
        <p>Name : {{$product ->name }}</p>
        <p>Description : {{$product ->desc }}</p>
        <p>Quantity : {{$product ->quantity }}</p>
        <p>Price : {{$product ->price }}</p>
</body>
</html>