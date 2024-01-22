<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <h1>Ati efectuat o comada, daca doriti detalii apelati la +373{{setting('site.phone')}}:</h1>


    <table class="checkout-table">
        <thead>
        <tr>
            <td>Nume produs</td>
            <td>Preț</td>
            <td>Cantitatea</td>
            <td>Subtotal</td>
        </tr>
        </thead>
        @foreach ($carts as $item )
            <tr class="table table-bordered border-primary">
                <td> {{ $item->name }} </td>
                <td><span>{{ $item->price }}</span> lei</td>
                <td>{{ $item->quantity }}</td>
                <td>
                    <span>{{ $item->price  * $item->quantity }}</span> lei
                </td>
            </tr>
        @endforeach
        <tr>

            <td class="total-sum">
                Total:
                    <span>{{ $sum }}</span> lei

            </td>
        </tr>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>





