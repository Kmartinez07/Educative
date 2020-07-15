 
          <meta name="csrf-token" content="{{ csrf_token() }}">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
 @extends('layouts.base')

 

@section('content')
        <style>
            .m-b-md {
                margin-top: -5%;
            }

            #Guardar, #LISTAR{
                height:8%;
                font-size:18px;
                margin-top:8%;
            }

           
           
        </style>
              <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="outer">
            <div class="inner">
            <h1><span class="glyphicon glyphicon-calendar"></span>Registro De Estudiantes</h1>
            </div>
        </div>

        
        <div class="contenido">
            <div class="conte"> 
            
            <form>
                    <div class="form">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Nombre</label>
                            <input type="Text" class="input form-control" id="Nombre"  style="WIDTH: 85%; HEIGHT: 5.8%"  >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Apellido</label>
                            <input type="Text" class="form-control" id="Apellido" style="WIDTH: 85%; HEIGHT: 5.8%">
                        </div>
<!--                         
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Direccion</label>
                            <input type="Text" class="input form-control" id="Direccion" placeholder="1234 Main St" style="WIDTH: 85%; HEIGHT: 5.8%">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress2">Telefono</label>
                            <input type="Text" class="input form-control" id="Telefono" placeholder="6639136..." style="WIDTH: 85%; HEIGHT: 5.8%">
                        </div>
                    
                        <div class="form-group col-md-6">
                            <label for="inputCity">Ciudad</label>
                            <input type="Text" class="input form-control" id="Ciudad" style="WIDTH: 85%; HEIGHT: 5.8%">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Jornada</label>
                            <select id="select" class="input form-control" style="WIDTH: 62%; HEIGHT: 5.8%">
                                <option selected>Seleccione...</option>
                                <option>Diurna</option>
                                <option>Norturna</option>
                            </select>
                        </div> -->
                        
                  
                        <div class="form-group col-md-6">
                            <button type="submit" id="Guardar" class="btn btn-primary">REGISTRAR</button>
                            <button type="submit" id="Listar" class="btn btn-primary">LISTAR</button>
                         </div>
                    </div>
                </form>

                <form method="post" enctype="multipart/form-data" action="https://localhost:44319/api/FileUploading/UploadFile">
                    <div>
                    <label for="img">Imagen File</label>
                    <input type="file" name="img">

                    <div>
                    <input type="submit" value="submit">
                    </div>
                    </div>
                </form>
                </div>
        </div>

               


        <script type="text/javascript">

                $.ajaxSetup({
                    headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
        });
  

        $("#Guardar").click(function(e) {
            e.preventDefault();
            
            var Name = $("#Nombre").val();
            var LasName = $("#Apellido").val();
            //   var Direccion = $("#Direccion").val();
            //   var Telefono = $("#Telefono").val();
            //   var Ciudad = $("#Ciudad").val();
            //   var Jornada = $("#select").val();

            
            $.ajax({
                type: 'POST',
                url: 'Registro',
                data: {Name: Name, LasName: LasName},
                headers: {
                    "Content-type": "application/x-www-form-urlencoded"
                  
                },

                success: function(data) {
                   alert("GUARDADO CON EXITO");
                },
                error: function() {
                    alert("No se ha podido enviar los datos"); 
                }

            });
 
        });

        // $("#Listar").click(function(e) {
        //     e.preventDefault();

        //     fetch('https://localhost:44319/api/Personas')
        //     .then(function(response) {
        //         return response.json();
        //     })
        //     .then(function(myJson) {
        //         console.log(myJson);
        //     });
  
            // $.ajax({
            //     type: 'GEt',
            //     url: 'https://localhost:44319/api/Personas',
            //      headers: {
            //         "Content-type": "application/x-www-form-urlencoded"
            //     },

            //     success: function(data) {
            //        alert("GUARDADO CON EXITO");
            //     },
            //     error: function() {
            //         alert("No se ha podido\n enviar los datos"); 
            //     }

            // });
 
        // });


 
</script>






<!-- 
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
     -->
    <!-- </body>
</html> -->


@endsection
