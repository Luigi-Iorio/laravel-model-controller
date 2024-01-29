<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Model Controller</title>
    @vite('resources/js/app.js')
</head>

<body>
    <main>
        <div class="container px-3">
            <h1 class="text-light m-5 text-center">Elenco Film</h1>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5">
                @foreach ($movies as $movie)
                    <div class="cont p-2">
                        <div class="card col bg-primary text-light">
                            <div class="card-header bg-secondary">
                                {{ $movie['title'] }}
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item bg-primary text-light">Titolo originale:
                                    {{ $movie['original_title'] }}</li>
                                <li class="list-group-item bg-primary text-light">Nazionalità:
                                    {{ $movie['nationality'] }}
                                </li>
                                <li class="list-group-item bg-primary text-light">Data: {{ $movie['date'] }}</li>
                                <li class="list-group-item bg-primary text-light">Voto: {{ $movie['vote'] }}</li>
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</body>

</html>
