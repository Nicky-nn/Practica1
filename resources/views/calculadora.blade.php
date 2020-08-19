<!DOCTYPE HTML>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Calculadora</title>
    
</head>
<body class="p-3 mb-2 bg-dark text-white">

    <div class="container-fluid"> 
        <h1>Ingrese Valores</h1><p class="text-secondary">Para Realizar La Suma, Resta, Multiplicación y Division</p>
        
        <form action="{{ route('calculadora.solucion') }}" method="post">
        @csrf
        <div class="form-group">
            <input class="form-control" type="number" name="a" id="a" placeholder="Valor A" required>
        </div>
        <div class="form-group">
            <input class="form-control" type="number" name="b" id="b" placeholder="Valor B" required>
        </div>
        <div class="custom-control custom-checkbox mr-sm-2"> <style>.custom-control-label, .custom-control{padding-block-end: 0.5em}}</style>
            <input type="checkbox" class="custom-control-input" name="customControlAutosizing" id="customControlAutosizing" onclick="myFuntion()">
            <label class="custom-control-label" for="customControlAutosizing">Con Potencia</label>
        </div>
        <div class="form-group">
            <input class="form-control" type="number" name="c" id="c" placeholder="Base" style="display:none">
        </div>
        <div class="form-group">
            <input class="form-control" type="number" name="e" id="e" placeholder="Exponente                (Si no se introduce por defecto sera 2)" style="display:none">
        </div>
        <style>
            #c,#e {
            background: rgba(238, 237, 237, 0.933);
            color: dimgray
}
        </style>
        <script>
            function myFuntion() {
                if(customControlAutosizing.checked == true){
                    c.style.display = 'block';
                    c.required = true;
                    e.style.display = 'block';
                }else{
                    c.style.display = 'none';
                    c.required = false;
                    e.style.display = 'none';
                    e.required = false;
                }
            }
        </script>
        <button class="btn btn-secondary btn-lg btn-block">Calcular</button>
        </form>

    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

