<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de accidentes</title>
</head>
<body>
    <h1>Registrar accidente</h1>
    <form action="{{route('accident.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="">Ingresa la hora</label><br>
        <input type="text" name="time"><br>
        <label for="">Ingresa el código</label><br>
        <input type="text" name="code"><br>
        <label for="">Ingresa la fecha</label><br>
        <input type="date" name="date"><br>
        <label for="">Ingresa el lugar</label><br>
        <input type="text" name="place"><br>
        <label for="">Ingresa la persona</label><br>
        <select name="person_id" id="">
            <option value="" hidden>Selecciona</option>
            @foreach ($people as $person)
                <option value="{{$person->id}}">{{$person->id}}-{{$person->name}}</option>
            @endforeach
        </select><br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>