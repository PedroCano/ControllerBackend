<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>index</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>index</h1>
            @if(Session::get('op') !== null)
            <h2>
                Resultado de la operación:
                {{ Session::get('op') }}
                {{ Session::get('result') }}
            </h2>
            @endif
            <a href="{{ url('ticket/create') }}">create</a>
            <table border="1" class="table">
                <tr>
                    <th scope="col">id #</th>
                    <th scope="col">name</th>
                    <th scope="col">price</th>
                    <th scope="col">show</th>
                    <th scope="col">edit</th>
                    <th scope="col">delete</th>
                </tr>
                @foreach ($tickets as $ticket)
                    <tr>
                        <td scope="row">{{ $ticket['id'] }}</td>
                        <td scope="row">{{ $ticket['name'] }}</td>
                        <td scope="row">{{ $ticket['price'] }}</td>
                        <td scope="row"><a href="{{ url('ticket/' . $ticket['id']) }}">show</a></td>
                        <td scope="row"><a href="{{ url('ticket/' . $ticket['id'] . '/edit') }}">edit</a></td>
                        <td scope="row"><a href="#">don't know</a></td>
                    </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>