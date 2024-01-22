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

    <h1>A parvenit o noua comanda de la:</h1>

    <ul>
        <li>{{$user->name}}</li>
        <li>{{$user->sname}}</li>
        <li>{{$user->address}}</li>
        <li>{{$user->phone}}</li>
        <li>{{$user->address}}</li>
        <li>{{$user->email}}</li>

    </ul>
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
</body>
</html>





