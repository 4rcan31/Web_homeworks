<?php

require 'conex_with_db.php';

if($conex){
    echo "se conecto exitosamente con la base de datos ";
}else{
    echo "No se logro conectar con la base de datos";
}