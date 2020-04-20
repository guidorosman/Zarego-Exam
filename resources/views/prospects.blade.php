<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:100,700" rel="stylesheet" type="text/css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/prospects.css">
    <title>Cabify</title>
  </head>
  <body>
    <div class="container">
        
        <form action="prospects" method="post">
            @csrf

            <div class="row">   
                <div class="col-12 p-5 pbLogo">    
                    <img src="img/logo.png" alt="Imagen logo">
                </div>
            </div>
            
            <div class="row">
                <div class="col-1">
                </div>
                <div class="col-5">
                     <label class="d-inline-block" for="name">Nombre</label>
                    <input class="w-100" type="text" name="name" id="name" placeholder="Ingrese el nombre" value="{{ old('name') }}" required>
                    @if($errors->any())
                        <small> {{ $errors->first('name') }}</small>
                    @endif                  
                </div>
                <div class="col-5">
                    <label class="d-inline-block" for="surname">Apellido</label>
                    <input class="w-100" type="text" name="lastname" id="lastname" placeholder="Ingrese el apellido" value="{{ old('lastname') }}" required>
                    @if($errors->any())
                        <small> {{ $errors->first('lastname') }}</small>
                    @endif
                </div>
                <div class="col-1">
                </div>    
            </div>

            <div class="row">
                <div class="col-1">
                </div> 
                <div class="col-10">
                    <label class="d-inline-block pt-4" for="email">Email</label>
                    <input class="w-100" type="email" name="email" id="email" placeholder="Ingrese el email" value="{{ old('email') }}" required>
                    @if($errors->any())
                        <small> {{ $errors->first('email') }}</small>
                    @endif
                </div> 
                <div class="col-1">
                </div>  
            </div>

            <div class="row">
                <div class="col-8">
                </div>
                <div class="col-3">
                    <button class="btn btn-send">Enviar</button>
                </div> 
                <div class="col-1">
                </div> 
            </div>

        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>