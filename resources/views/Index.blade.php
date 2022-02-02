<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>

    <style>
        body{
            background-color: black
        }
        #header{
            background-color: rgb(86, 182, 102);
            color: rgb(255, 255, 255);
            display: flex;
            justify-content: space-between;

        }
        #header a{
            color: rgb(255, 255, 255);
            text-decoration: none;
            
        }
        .texto{
            color: rgb(255, 255, 255);
            font-size: 20px;
            font-weight: bold;
            margin-top: 10px;
        }

        h1{
            font-size: 2rem;


        }
        body{
            margin: 0%;
        }
    </style>
</head>
<body>
    
        <header id="header">
            
            <div>
            <a href="/">¿Quien soy? </a>
            
            <a href="/extencion">¿Que se? </a>
            <a href="/pagina">Redes Sociales</a>
            </div>
        </header>
        
        <br>
        <br>
        <div class="texto">
        <h2>{{$h1}}</h2>
        <br>
        <br>
        <div>
        @yield('inicio')
        </div>
        </div>
</body>
</html>