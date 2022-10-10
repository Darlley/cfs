<?php 

function validate(array $fields){

    $request = request();

    $validate = [];

    foreach($fields as $key => $field){
        switch($field){
            case 's':
                $validate[$key] = filter_var($request[$key], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                break;

            case 'i':
                $validate[$key] = filter_var($request[$key], FILTER_SANITIZE_NUMBER_INT);
                break;
            
            default: 
                $validate[$key] = filter_var($request[$key], FILTER_SANITIZE_EMAIL);
                break;
        }
    }

    return (object) $validate;
}