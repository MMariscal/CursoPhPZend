<?php

/**
 * Filter input data form by 
 * striptags, striptrim
 * 
 * @param array $form form Definition
 * @param array $data form Data 
 * @return array $filterdata
 */
function filterForm($form, $data)
{
    $filterdata = $data;
    foreach($data as $key => $value)
    {
        if(is_array($form[$key]["filters"])){
            if (in_array("striptrim", $form[$key]["filters"])) {
                $filterdata[$key]= trim($form[$key]);
            }
            if (in_array("striptags", $form[$key]["filters"])) {
                $filterdata[$key]= strip_tags($form[$key]);
            }
        }
    }
    return $filterdata;
}