

<?php

    $array = (array) ["Miguel","Marcelo", "monica", "Walter", "Juan", "Monica"];
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

    $res = array_keys($array, 'monica');
    



    print_r($array);
    echo "<br>";
    print_r($res);

?>