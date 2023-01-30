<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('styles/localisation.css') }}">
</head>
<body>
        <h1>
            Ou nous trouvez ?
            <br>
        </h1>

        <p>
            <br>
            nous avons un ensembles de points de services dans differentes ville au cameroun<br>
            il vous suffit de choisir celle qui vous convient juste en dessous et laissez-vous<br>
            guidez par la Map ou contactez nous via les moyen mis a votre disposition au pieds de la page.
            <br>
        </p>
        <div>
            <a href="{{ route('yaounde') }}">
                 YAOUNDE<br>
            </a>

            <a href="{{ route('douala') }}">
                DOUALA<br>
            </a>

            <a href="{{ route('dschang') }}">
                DSCHANG<br>
            </a>

            <a href="{{ route('bafoussam') }}">
                BAFOUSSAM<br>
            </a>
        </div>


</body>
</html>
