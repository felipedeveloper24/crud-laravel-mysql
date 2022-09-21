<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Laravel</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    $contador = 0;
    ?>
    <div class="w-100 d-flex flex-column">
    <h1 class="text-center">Crud con laravel</h1>
    <div class="w-100 mt-3 d-flex flex-row">
        <table class="w-50 table table-hover">
            <thead>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->id}}</td>
                        <td>{{$usuario->nombre}}</td>
                        <td>{{$usuario->apellido}}</td>
                        <td>{{$usuario->edad}}</td>
                        <td>
                            <!-- Button to Open the Modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal{{$contador}}">
                                    Modificar 
                                </button>
                                
                                <!-- The Modal -->
                                <div class="modal" id="myModal{{$contador}}">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                        <h4 class="modal-title">Modificar Informacion</h4>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <form class="w-75 m-auto" action="{{url('update',['id'=>$usuario->id])}}">
                                                <div class="col-12">
                                                    <label for="">Id</label>
                                                    <input disabled required class="form-control" type="number" name="id" required value="{{$usuario->id}}">
                                                </div>
                                                <div class="col-12">
                                                    <label for="">Nombre</label>
                                                    <input class="form-control" required type="text" name="name" value="{{$usuario->nombre}}">
                                                </div>
                                                <div class="col-12">
                                                    <label for="">Apellido</label>
                                                    <input required class="form-control" type="text" name="apellido" value="{{$usuario->apellido}}">
                                                </div>
                                                <div class="col-12 mb-2">
                                                    <label for="">Edad</label>
                                                    <input required class="form-control" type="text" name="edad" value="{{$usuario->edad}}">
                                                </div>
                                                <div class="col-6">
                                                    <input type="submit" value="Actualizar información" class="btn btn-success">
                                                </div>
                                            </form>
                                        </div>
                                
                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                                        </div>
                                
                                    </div>
                                    </div>
                                </div>
                         
                            <a class="btn btn-danger" href={{ url('delete', ['id'=>$usuario->id]) }} >Eliminar</a>
                        </td>
                    </tr>
                  <?php $contador ++;?>
                @endforeach
            </tbody>
        </table>    
        
        
        
        <form action="insert" method="post" class="w-50 border">
            @csrf
            <h1 class="text-center">Formulario de registro</h1>
            <div class="col-10 m-auto">
                <label for="">Nombre:</label>
                <input name="name" required type="text" class="form-control">
            </div>
            <div class="col-10 m-auto">
                <label for="">Apellido:</label>
                <input name="apellido" required type="text" class="form-control">
            </div>
            <div class="col-10 m-auto">
                <label for="">Edad:</label>
                <input name="edad" type="number" required class="form-control">
            </div>
            <div class="col-10 d-flex mt-2 m-auto justify-content-center ">
                <button class="btn btn-primary w-75">Enviar datos</button>
            </div>
        </form>

    </div>
    

    </div>
</body>
</html>