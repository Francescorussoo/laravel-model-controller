<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}"> <!-- Importa lo stile compilato da Laravel Mix -->
</head>
<body>
    <div class="container">
        <h1>Movies</h1>
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title }}</h5>
                            <p class="card-text">{{ $movie->description }}</p>
                            <p class="card-text"><strong>Anno:</strong> {{ $movie->year }}</p>
                            <p class="card-text"><strong>Regista:</strong> {{ $movie->director }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
