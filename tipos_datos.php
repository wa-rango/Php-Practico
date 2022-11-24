<?php
    /*
    -Integers o enteros son numeros 
    -no contienen decimales
    -Pueden contener números octales (base 8), 
    hexadecimales (base 16) y binarios (base 2)
    */

    echo "<br />";
    echo "------------------ENTEROS-------------";
    echo "<br />";
    $puntaje = 120;
    echo $puntaje;

    echo "<br />";
    //Hexadecimal
    $numHexa = "41A864";  //4302948
    echo $numHexa;

    echo "<br />";
    //Convertir string a entero
    $puntaje =20;
    $Total = "120" + $puntaje;
    echo $Total;

    //Numero negativos
    $puntajeTotal = 8 - 20;
    echo $puntajeTotal;


    echo "<br />";
    //Obtener tamaño de un entero (Determinado por el sistema)
    echo PHP_INT_SIZE;

    echo "<br />";
    //Obtener minimo de un entero (Determinado por el sistema)
    echo PHP_INT_MIN;

    echo "<br />";
    //Obtener maximo de un entero (Determinado por el sistema)
    echo PHP_INT_MAX;

    
    echo "<br />";
    echo "------------------ENTEROS-------------";
    echo "<br />";
    //definir decimales 
    /*
     -Decimales son numeros reales
    -Se escriben con punto 
    -Se pueden redondear con el metodo round()
    Pueden ser negativos
    */
   
    $pagoTotal = 102.45;
    echo "<br />";
    echo $pagoTotal;

    $saldoPendiente = -56.23;
    echo "<br />";
    echo $saldoPendiente;

    //Redondear decimales
    $puntaje = 48.51;
    echo "<br />";
    echo round($puntaje);

    //Comparar decimales con precision 0.1
    $precio = 1.87;
    $estimado = 2.97;
    echo "<br />";
    echo (abs($precio - $estimado) < 0.1) ? "PAGA": "NO PAGA";
    
    echo "<br />";
    echo "------------------BOOLEANOS-------------";
    echo "<br />";
    //definir booleanos
    /*
    -Verdadero o falso: true or false
    -No son case sensitive
    -Cuando se imprime con echo true=1 false=0
    -para los valores strint el 0 es false y cualquier otro valor diferente de 0 es true
    -Son usualmente usados en condiciones para validar cosas
    -
    */
    $puedeAcceder = true;
    $validado = false;
    echo ($puedeAcceder) ? "VERDADERO" : "FALSO";
    echo "<br />";
    echo ($validado) ? "VERDADERO" : "FALSO";

    //Imprimiendo variables booleanas
    echo "<br />";
    echo "Verdadero: " . $puedeAcceder . "<br />";
    echo "<br />";
    echo "Falso: " . $validado . "<br />";
    
    //Como usar un string como booleano
    echo "<br />";
    $estalogueado = true;
    $inicioSesion = "0";
    echo ($estalogueado && $inicioSesion) ? "Usuario logueado" : "No se pudo loguear";
    
    //Como usar un string como booleano
    echo "<br />";
    $estalogueado = true;
    $inicioSesion = "5";
    echo ($estalogueado && $inicioSesion) ? "Usuario logueado" : "No se pudo loguear";
    
    echo "<br />";
    echo "------------------STRINGS-------------";
    echo "<br />";
    //definir strings
    /*
    -los striongs se definen en doble o comilla simple
    -las comillas dobles  pueden interpolar variables, las simples no
    - Aunque no hay un limite en general para una variable string, Este si esta definido por el sistema
    -Se deben escapar los caracteres de comillas doble y otros caracteres
    Se pueden realizar tareas de manipulacion sobre los strings con otros metodos
    -Verdadero o falso: true or false   -
    */
    
    $nombre = "Jose Andres";
    $apellidos = "Montoya";
    
    echo "$nombre y $apellidos";

    echo "<br />";
    //Combinando strings
    $nombre2 = $nombre . "  -  " . $apellidos;
    echo $nombre2;

    echo "<br />";
    //Escapar caracteres con contra bartra o backslash
    $nombre3 = "Ejemplo de caracter \"especial\"";
    echo $nombre3;

    echo "<br />";
    //Introducción a los metodos de operaciones con string, obtener la longitud  de un string:strlen
    $nombre4 = "Carlos Alberto Morales";
    echo strlen($nombre4); 

    echo "<br />";
    echo "------------------NULL-------------";
    echo "<br />";
    /*
    -NULL no es case sensitive NULL/null 
    -Es usualmente usado para inicializar una variable con un valor vacio
    -usa metodos como unset y is_null
    */

    //Definir nulo
    $documento = null;
    echo $documento;
    echo ($documento) ? "Contiene valor" : "Sin valor ";

    //Metodo is_null
    echo "<br />";
    $documento = "0";
    echo (!is_null($documento)) ? "contiene valor" :
    "Sin valor";

    //Borrar la variable del programa y memoria con unset()
    unset($documento);
    echo (!is_null($documento)) ? "contiene valor" :
    "Sin valor";

?>  