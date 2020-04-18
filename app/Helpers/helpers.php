<?php

if(! function_exists('isActive')){
    function isActive($href, $class = 'active')
    {
        return $class = (strpos(Route::currentRouteName(), $href) === 0 ? $class : '');
    }
}

if (! function_exists('array_obj')) {

    function array_obj($array)
    {
        return json_decode(json_encode($array));
    }
}

if (! function_exists('set_selected')) {

    function set_selected($field, $value)
    {
        return $field != $value ?: 'selected';
    }
}
