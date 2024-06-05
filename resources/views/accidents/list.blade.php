<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de accidentes</title>
</head>
<body>
    <h1>Lista de accidentes</h1>
    @foreach ($accidents as $accident)
    <tr>
        <td>{{$accident->time}}</td>
        <td>{{$accident->code}}</td>
        <td>{{$accident->date}}</td>
        <td>{{$accident->place}}</td>
        <td>{{$accident->person_id}}</td>
        <td><a href="{{route('accident.show',$accident->id)}}">Mostrar</a></td>
        <td><a href="{{route('accident.edit',$accident->id)}}">Editar</a></td>
        <td>
            <form action="{{route('accident.destroy',$accident->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
            </form>   
        </td>
    </tr>
    @endforeach
</body>
</html>