<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit User</title>
</head>
<body>
    <div class="container">
        <form action="{{route('usuarios.update', $user->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="names" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="names" name="names" aria-describedby="nameHelp" value="{{old('names', $user->names)}}">
            </div>
            <div class="form-group">
                <label for="lastnames" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="lastnames" name="lastnames" aria-describedby="lastnameHelp" value="{{old('lastnames', $user->lastnames)}}">
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Correo Electronico</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp"value="{{old('email', $user->email)}}">
            </div>
            <div class="form-group">
                <label for="address" class="form-label">dirección</label>
                <input type="text" class="form-control" id="address" name="address" aria-describedby="addressHelp" value="{{old('address', $user->names)}}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
</body>
</html>
