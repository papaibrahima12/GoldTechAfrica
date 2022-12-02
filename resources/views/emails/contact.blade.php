<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gold Tech Africa</title>
</head>
<body>
        <h1>Demande d'admission</h1>
        <p>L'etudiant {{ $data->nom }} a fait une demande d'admission en formation numerique </p>
        <p>Ses coordonnées sont : </p>
        <strong>Nom : </strong> {{ $data->nom }} <br/>
        <strong>Email : </strong> {{ $data->email }} <br/>
        <strong>Telephone : </strong> {{ $data->tel }} <br/>
        <strong>Niveau : </strong> {{ $data->niveau }} <br/>

</body>
</html>