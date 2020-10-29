<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>show</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>show: {{ $name }}</h1>
            id:    {{ $id    }}<br>
            name:  {{ $name  }}<br>
            price: {{ $price }}<br>
            date:  {{ $date  }}<br>
            time:  {{ $time  }}<br>
            <br>
            <a href="{{ url('ticket/' . $id . '/edit') }}">edit</a><br>
            <a href="{{ url('ticket') }}">index</a><br>
            <form action="{{ url('ticket/' . $id) }}" method="post">
                <div class="form-group">
                    @method('delete')
                    @csrf
                    <input type="submit" class="btn btn-primary" value="destroy"/>
                </div>
            </form>
        </div>
    </body>
</html>