<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>edit</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>edit: {{ $name }}</h1>
                <form action="{{ url('ticket/' . $id) }}" method="post">
                    <div class="form-group">
                        @method('put')
                        @csrf
                        <input type="text"   class="form-control" name=""      value="{{ $id    }}" readonly/>
                        <input type="text"   class="form-control" name="name"  value="{{ $name  }}"/>
                        <input type="number" class="form-control" name="price" value="{{ $price }}"/>
                        <input type="date"   class="form-control" name="date"  value="{{ $date  }}"/>
                        <input type="time"   class="form-control" name="time"  value="{{ $time  }}"/>
                        <input type="submit" class="btn btn-primary" value="edit"/>
                    </div>
                </form>
                <a href="{{ url('ticket') }}">index</a><br>
                <a href="{{ url('ticket/' . $id) }}">show</a><br>
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