<?php
// 通过路由名 切换成class名
function route_class()
{
    if (strpos(Route::currentRouteName(),'.') !== false){
        return str_replace(".","-",Route::currentRouteName());
    }
    return Route::currentRouteName();
}

function isIndexClass(){
    return (Route::currentRouteName() == "index")?"mb-2":"mt-3";
}