<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  
 
        
        <!-- Styles -->
        <style>
            .navbar-global {
            background-color:  #FAFAFA ;
          
            }

            
            .navbar-global .navbar-user > li > a
            {
            color: white;
           
            }

            .navbar-primary {
                
            background-color: #FAFAFA;
            bottom: 0px;
            left: 0px;
            position: absolute;
            top: 51px;
            width: 260px;
            z-index: 8;
            overflow: hidden;
            -webkit-transition: all 0.1s ease-in-out;
            -moz-transition: all 0.1s ease-in-out;
            transition: all 0.1s ease-in-out;
            }

            /* .navbar-primary.collapsed {
            width: 40px;
            } */

            .navbar-primary.collapsed .glyphicon {
            font-size: 35px;
            }

            .navbar-primary.collapsed .nav-label {
            display: none;
            }

            .btn-expand-collapse {
                position: absolute;
                display: block;
                left: 0px;
                bottom:0;
                width: 120%;
                padding: 8px 10;
                /* border-top:solid 1px #666; */
                color: grey;
                font-size: 21px;
                text-align: center;
            }

            /* .btn-expand-collapse:hover,
            .btn-expand-collapse:focus {
                background-color: #222;
                color: white;
            } */

            /* .btn-expand-collapse:active {
                background-color: #111;
            } */

            .navbar-primary-menu,
            .navbar-primary-menu li {
            margin:0; padding:0;
            list-style: none;
       
            }

            .navbar-primary-menu li a {
                margin-top:4%;
                display: block;
                padding: 10px 55px;
                text-align: left;
                border-bottom: #444;
                font-size: 20px;
                color: #848484;
            }

            .navbar-primary-menu li a:hover {
            background-color: #22DEF1;
            text-decoration: none;
            color: white;
            /* font-size: 19px; */
            }

            .navbar-primary-menu li a .glyphicon {
            margin-right: 10px;
            }

            .navbar-primary-menu li a:hover .glyphicon {
            color: orchid;
            }

            .main-content {
            margin-top: 63px;
            margin-left: 250px;
            padding: 20px;
            
            }

            .collapsed + .main-content {
            margin-left: 63px;
            }

            
            html, body {

            /* Permalink - use to edit and share this gradient: https://colorzilla.com/gradient-editor/#00a881+11,00a385+12,00a881+12,00a881+34,00a881+34,00c4b3+76 */
            background: #00a881; /* Old browsers */
            background: -moz-linear-gradient(-45deg,  #00a881 11%, #00a385 12%, #00a881 12%, #00a881 34%, #00a881 34%, #00c4b3 76%); /* FF3.6-15 */
            background: -webkit-linear-gradient(-45deg,  #00a881 11%,#00a385 12%,#00a881 12%,#00a881 34%,#00a881 34%,#00c4b3 76%); /* Chrome10-25,Safari5.1-6 */
            background: linear-gradient(135deg,  #00a881 11%,#00a385 12%,#00a881 12%,#00a881 34%,#00a881 34%,#00c4b3 76%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00a881', endColorstr='#00c4b3',GradientType=1 ); /* IE6-9 fallback on horizontal gradient */

                 
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

          
            .m-b-md {
                margin-bottom: 30px;
            }

            #Encabezado{
                 font-size: 22px;
                 color: #848484;
            }

            /* /////////////////////CUERPO DEL CONTENIDO ////////////////////////////////////////7 */
            .outer { 
                position: relative;
                width: 100%;
                padding-bottom: 6%;
                margin-top:-69px;
                }
            .inner {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: #FAFAFA;
            padding: 15px;
            color: #848484;
            }

            .contenido{ 
                position: relative;
                width: 100%;
                padding-bottom: 49%;
                margin-top:10px;
            }

            .conte{
                position: absolute;
                width: 100%;
                height: 100%;
                background-color: #FAFAFA;
                padding: 15px;
                color: #848484;
                font-size:23px;

              
            }

        </style>
    </head>
    <body>
    <nav class="navbar navbar-global navbar-fixed-top">
      <div class="container-fluid">
            <div class="navbar-header">
            
            <a id="Encabezado">INSTITUCION EDUCATIVA ALFONSO LOPEZ PUMAREJO</a>
            </div>
            <!-- <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-user navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-user"></span> Santhosh Giridara</a></li>
                <li><a href="#about"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
            </div>  -->
      </div>
    </nav>
<nav class="navbar-primary">
   <ul class="navbar-primary-menu">
    <li style="margin-top:28%;">
      <a href="/Horario"><span class="glyphicon glyphicon-calendar"></span><span class="nav-label">Horario</span></a>
      <a href="#"><span class="glyphicon glyphicon-indent-right"></span><span class="nav-label">Calificaciones</span></a>
      <a href="/Actividades"><span class="glyphicon glyphicon-list-alt"></span><span class="nav-label">Actividades</span></a>
      <a href="#"><span class="glyphicon glyphicon-tasks"></span><span class="nav-label">Progreso</span></a>
      <a href="#"><span class="glyphicon glyphicon-user"></span><span class="nav-label">Mis Docentes</span></a>
      <a href="/Estudiantes"><span class="glyphicon glyphicon-user"></span><span class="nav-label">Estudiantes</span></a>
    </li>
  </ul>
</nav>
<div class="main-content">

 
            <!-- <div class="container"> -->
                @yield('content')
            
            <!-- </div> -->


        

        <!-- <div class="outer">
            <div class="inner">
            <h1><span class="glyphicon glyphicon-calendar"></span>Horario De Clases</h1>
            </div>
        </div>

        
        <div class="contenido">
            <div class="conte"> 
            </div>
        </div> -->
        

</div>
 

     
        
        </script>

        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    </body>
</html>
