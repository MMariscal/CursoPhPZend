<?php
/**
 * 
 * @param unknown $valor
 */

function dibujaArray($valor)
{
    foreach ($valor as $result){
        echo ($result);
    }
}

$valor= array(1,2,3,4)   ;

dibujaArray($valor);