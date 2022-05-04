<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        @foreach ($movies as $movie)
            <div class="{{$movie->id % 2 == 0? 'even-card': 'odd-card'}}">
                <div class="titles">
                    <h2>{{$movie->title}}</h2>
                    <h4>{{$movie->original_title}}</h4>
                </div>
                <div class="info">
                    <p>Date: {{date('d-m-Y', strtotime($movie->date))}}</p>
                    <p class="vote">Vote: {{$movie->vote}}</p>
                </div>
            </div>
        @endforeach
    </div>

</body>
</html>



