<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException; 
use GuzzleHttp\Cookie\CookieJar;
use Redirect;


class EstudianteController extends Controller
{
        
public function Registrar(){
    
        $Name =  $_POST['Name'];
        $Age = $_POST['LasName'];
      
        $client = new \GuzzleHttp\Client([
            "curl" => [
                CURLOPT_SSL_VERIFYPEER => false
            ],
            'headers' => [ 'Content-Type' => 'application/json' ],
           
        ]);
        // http://localhost:3100/Register/Student
        try{
          $responses = $client->post('https://localhost:44319/api/Personas', [
              'body' => json_encode(
                [
                    'name' => $Name,
                    'age' => $Age,
                    // 'Direccion' => $Direccion,
                    // 'Telefono' => $Telefono,
                    // 'Ciudad' => $Ciudad,
                    // 'Jornada' => $Jornada,
                ]
            )]
     
          );
    
              $CER = $responses->getBody()->getContents();

              
             
            return   $CER;
         
       }catch (GuzzleHttp\Exception\RequestException $e ){
           var_dump($e->Messanger());
       }
        
      
      
  
}



// LISTAR

// fetch('http://localhost:3100/List/Students')
// .then(function(response) {
//     return response.json();
// })
// .then(function(myJson) {
//     console.log(myJson);
// });

// var url = 'http://localhost:3100/Register/Student';
// var data = {Name: Nombre, LastName: Apellido};

//     fetch(url, {
//     method: 'POST', // or 'PUT'
//     body: JSON.stringify(data), // data can be `string` or {object}!
//     headers:{
//         'Content-Type': 'application/json'
//     }
//     }).then(res => res.json())
// .catch(error => console.error('Error: Al Guardar Datos', error))
// .then(response => alert('Guardado con exito!!!:', response));





}
