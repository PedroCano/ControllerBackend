<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>create</title>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1>create</h1>
            <form action="{{ url('ticket') }}" method="post">
                <div class="form-group">
                    @csrf
                    <input type="text"   class="form-control" name=""      value="#" readonly/>
                    <input type="text"   class="form-control" name="name"  value=""/>
                    <input type="number" class="form-control" name="price" value=""/>
                    <input type="date"   class="form-control" name="date"  value=""/>
                    <input type="time"   class="form-control" name="time"  value=""/>
                    <input type="submit" class="btn btn-primary" value="create"/>
                </div>
            </form>
            <a href="{{ url('ticket') }}">index</a><br>
        </div>
    </body>
</html>