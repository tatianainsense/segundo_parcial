<nav>
    <ul>
    <?php

    // con foreach se indica un valor para cada link que se quiera hacer en la pagina
    foreach( $secciones as $llave => $valor ){ 
        //hacer algo
        $activo = '';
        $destino = "?seccion=$llave";
        if ( !isset( $_GET ['seccion']) and $llave === 'p1'){
            $activo = 'class="activo"';
        }

    //el signo ! en php significa negación por ejemplo !isset 
    // = es igual derecha e izquierda   == comparando numeros, cadenas, true/false, etc.  === comparar estrictamente (mismo tipo de elemento)
        if ( isset( $_GET ['seccion']) and $_GET['seccion'] === $llave){
            $activo = 'class="activo"';
        }

        //echo <p> Para la llave  $llave el valor es $valor </p>
        //es siguiente paso es para hacer que las pestañas incio, producto y servicio aparezcan sin necesidad de indicarlo
        if ( $llave === 'p1') {
            $destino = '';
        }
        
        echo " <li> 
        <a $activo href=\"./$destino\">$valor[titulo] </a>
        </li>" ;
        //al agregar $activo se indica que cuando un boton este prendido, los otros van a estar apagados
    }


    ?>
    
    </ul>
</nav>


