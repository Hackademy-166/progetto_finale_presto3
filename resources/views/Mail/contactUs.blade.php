<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nuova richiesta di diventare revisero ricevuta da: <br> {{$email}}</h1>
    <p>L'utente {{$name}} {{$surname}} ha compilato il form richiedendo le seguenti informazioni: <br> {{$user_message}}</p>
    <p>Se vuoi autorizzarlo a diventare un revisore clicca qui:</p>
    <a href="{{route('make-revisor', compact('user'))}}">Rendi Revisore</a>

</body>
</html>