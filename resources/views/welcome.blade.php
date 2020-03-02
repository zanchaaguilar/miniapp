<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
       
    </head>
    <body>
       <form action="api/song" method="POST">
       
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="artist" placeholder="Artist">

        <button>Save</button>
       
       </form>


    <table class="table">
    
    <thead>
    
        <tr>Song List</tr>

    
    </thead>

    @foreach($songs as $song)
    <tr>
        <td>{{$song->name}}</td>
        <td>{{$song->artist}}</td>
    
    </tr>

    @endforeach
    </table>
    </body>
</html>
