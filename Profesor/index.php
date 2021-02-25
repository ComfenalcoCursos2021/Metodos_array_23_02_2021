


<?php
    header('Content-Type: application/json');

    // $array = (array) ["Marcelo", "Walter", "Juan", "Profesores"];
    // $array1 = (array) ["perrito", "vaca", "oso", "pato"];

    // Insertar en la lista un dato al final
    // $res = array_push($array, "Thomas");
    // $array[] = "Alex";


    // Insertar al inicio de la lista un datos
    // $res = array_unshift($array, "Thomas");

    // Extrae y eilimina el ultimo dato de la lista
    // $res = array_pop($array);

    // Extrae y eilimina el primer dato de la lista
    // $res = array_shift($array);

    //Extraemos los datos necesarios de las lista y afectamos
    //Dicha lista, nos vuelve los datos estraidos de la lista 
    // $res = array_splice($array, 2);

    //Si el 3 valor del metos es negativo se pocicionara en el ultimo
    //Elemento y estraera dichos valor
    // $res = array_splice($array, 1, -1);
    // $res = array_splice($array, 2, 2);

    // Despues del primier datos de nuestra lista eliminamos los demas
    // y insertamos en la lista afecta un nuevo datos despues del dato selecionado
    // $res = array_splice($array, 1, count($array), "Thomas");

    //Insertamos datos en la lista principal segun el puntero 

    // $res = array_splice($array, 2, 0, ["Thomas", "Manuel"]);


    //Duplica los datos de la lista principal sin afectarla
    //Y retorna los dos selecionados con el puntero
    // $res = array_slice($array,1,2);


    //Ordenada los datos alfabeticamente y de mayor a menor
    // $res = sort($array, SORT_NATURAL | SORT_FLAG_CASE );


    //Buscamos los indices de los datos con el metodo y segun los parametros
    //el nombre del valor de lista si el datos es identico operador compracion (===) (true,false)
    //Como resultado son los indices en un lista array
    // $res = array_keys($array, "Marcelo", true);

    //Buscamos los indices de los datos con el metodo y segun los parametros
    //el nombre del valor de lista si el datos es identico operador compracion (===) (true,false)
    //Como resultado es el indicice encontrado
    // $res = array_search("Miguel", $array["Profesores"], true);

    // Crear y rellenar un array con un dato especifico ("Curso_PHP")
    // $res = (array) array_fill(0,5,"Curso_PHP");
    
    // Crear y rellenar un array siempre y cuando el array al utilizar sea menor
    //A los campos a rellenar con un dato especifico ("Curso_PHP")
    // $res =  array_pad($array,count($array)+5,"Curso_PHP");
 

    //Combina dos array para crea un array asociativo siendo el primer parametro
    //Las keys y el segundo los datos relacionados a la key
    // $res = array_combine($array , $array1);

    
    // $array = (array) [
    //     array(
    //         "CC" => 123456789,
    //         "Nombre" => "Miguel Angel",
    //         "Edad" => 23,
    //         "Estado_civil" => false,
    //         "Salud" => array(
    //             "Nombre" => "Coosalud",
    //             "NIT" => 123,
    //         ),
    //     ),
    //     array(
    //         "CC" => 8686,
    //         "Nombre" => "Thomas Perez",
    //         "Edad" => 15,
    //         "Estado_civil" => true,
    //         "Salud" => array(
    //             "Nombre" => "Cafesalud",
    //             "NIT" => 456,
    //         ),
            
    //     ),
    //     array(
    //         "CC" => 4868486,
    //         "Nombre" => "Juan Carlos",
    //         "Edad" => 25,
    //         "Estado_civil" => true,
    //         "Salud" => array(
    //             "Nombre" => "Sanitas",
    //             "NIT" => 798,
    //         ),
    //     ),
    //     array(
    //         "CC" => 86486,
    //         "Nombre" => "Claudia Milena",
    //         "Edad" => 20,
    //         "Estado_civil" => false,
    //         "Salud" => array(
    //             "Nombre" => "EPS",
    //             "NIT" => 753,
    //         ),
    //     ),
    //     array(
    //         "CC" => 486486745,
    //         "Nombre" => "Marcelo Gomez",
    //         "Edad" => 20,
    //         "Estado_civil" => false,
    //         "Salud" => array(
    //             "Nombre" => "Comeva",
    //             "NIT" => 159,
    //         ),
    //     ),
    // ];
    // $nit = array_column(
    //             array_column(
    //                 $array, "Salud"
    //             ),
    //         "NIT"
    //     );
    // foreach ($array as $key => $value) {
    //     foreach ($array[$key]["Salud"] as $key2 => $value2) {
    //         if($key2=="Nombre"){
    //             $array[$key]["NombreEps"] =  $value2;
    //             break;
    //             // goto parra_salud;
    //         }
    //     }
    //     // parra_salud:
    //     unset($array[$key]["Salud"]);
    // }
    // $res = array_combine($nit, $array);
    
    //Convierte los datos de una lista enumerada en variables
    //individuales 
    // $array = array("Nike", "Violeta", 2500);

    // list($zapasto,$color,$precio) = $array;
    // print_r($color);
    


    
    //El nombre de la variable la asigana a un array asociativo con su valor
    //dado en la variable mensionada

    // $profesor = (string) "Miguel";
    // $universidad = (string) "Comfenalco";
    // $permiso = (bool) false ;
    // $alumnos = (array) ["Willian","Juan"]; 

    // $res = compact('universidad','profesor','permiso','alumnos');

    $Nombre = "Juan";
    $array = (array) ["Nombre" => "Miguel","Apellido" => "Castro"];

    extract($array, EXTR_PREFIX_SAME, "data");

    print_r($data_Nombre);
    echo "\n";
    print_r($Apellido);








    // print_r($array);
    // print_r($res);

?>