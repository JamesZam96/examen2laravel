<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edición de accidentes</title>
</head>
<body>
    <h1>Editar accidente</h1>
    <form action="{{route('accident.update', $accident)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <label for="">Ingresa la hora</label><br>
        <input type="text" name="time" value="{{old('time',$accident->time)}}">{{old('time',$accident->time)}}<br>
        <label for="">Ingresa el código</label><br>
        <input type="text" name="code" value="{{old('code',$accident->code)}}">{{old('code',$accident->code)}}<br>
        <label for="">Ingresa la fecha</label><br>
        <input type="date" name="date" value="{{old('date',$accident->date)}}">{{old('time',$accident->date)}}<br>
        <label for="">Ingresa el lugar</label><br>
        <input type="text" name="place" value="{{old('place',$accident->place)}}">{{old('place',$accident->place)}}<br>
        <label for="">Ingresa la persona</label><br>
        <select name="person_id" id="">
            <option value="" hidden>Selecciona</option>
            @foreach ($people as $person)
                <option value="{{$person->id}}">{{$person->id}}-{{$person->name}}</option>
            @endforeach
        </select><br>
        <button type="submit">Actualizar</button>

    </form>
</body>
</html>