
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <div class="top">
        <h2 class="titulo">La increible mejor página del mundo of the year del año</h2>
        <p class="titulo">Hecha por Sergio, Jose Román, Jose Guerrero y Bruno🍆</p>
    </div>
    <div class="separacion"></div>
    <style>
        
        body{
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #00023f, #3838a1);

        }
        .separacion{
            width: 100%;
            height: 10px;
            background-color: #000000;
        }
        .top{
            background: linear-gradient(to right, #3838a1, #00023f);
            justify-content: center;
            display: grid;
            padding: 5px;
        }
        .titulo{
            color: rgb(255, 255, 255);
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        .lists{
        display: flex;
        gap: 10px;

    }
    .tipoUsuario{
        text-align: center;
        background-color: rgb(132, 192, 245);
        padding: 10px;
        border-radius: 5px;
    }
    .bienvenido{
        background-color: rgb(132, 192, 245);
        padding: 20px;
        border-radius: 5px;
    }
    .page{
        width: 100%;
        height: 100%;
        padding: 0px;
        margin: 0px;
    }
    
    .botonCambio{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        text-decoration: none;
        background-color: rgb(173, 173, 205);
        padding: 15px;
        cursor: pointer;
        animation: animacionBoton 3s infinite;
        border-style: none;
        margin-bottom: 30px;
    }

    .botonCerrarSesion{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        text-decoration: none;
        background-color: rgb(173, 173, 205);
        padding: 15px;
        cursor: pointer;
        animation: animacionBoton 3s infinite;
        border-style: none;
        margin-bottom: 30px;
    }

    .botonCreate{
        margin-top: 15px;
    }
    /*CSS BRUNO CON ANIMACIONES DE LA MUERTE*/
    .create{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        text-decoration: none;
        background-color: rgb(173, 173, 205);
        padding: 15px;
        cursor: pointer;
        animation: animacionBoton 3s infinite;


    }

    .contenidoTitulo{
        color: rgb(255, 255, 255);
        text-decoration: none;
        font-size: 30px;
    }
    .contenidoTitulo:hover{
        color: rgb(164, 164, 164);
        text-decoration: none;
    }

    .containerContenidoTitulo{

    }

    .create:hover{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        text-decoration: none;
        background-color: rgb(154, 154, 216);
        padding: 15px;
        transform: scale(1.1);
    }
    @keyframes animacionBoton {
    0% {
        background-color: #1d89fd;
        padding: 15px;
    }
    25%{
        background-color: #0559b2;
        padding: 15px;
    }
    50% {
        background-color: #1d89fd;
        padding: 15px;
    }
    75%{
        background-color: #0559b2;
        padding: 15px;
    }
    100% {
        background-color: #1d89fd;
        padding: 15px;
    }
    }
    ul{
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        font-size: 20px;
        background-color: #2e6cab;
        padding-right: 38px; 
        padding-bottom: 20px;
        border-radius: 5px; 
    }
    .centrarLista{
        display: flex;
        justify-content: center;

    }



    </style>
    @yield('content')
</body>

</html>
