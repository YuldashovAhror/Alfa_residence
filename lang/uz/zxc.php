<?php
foreach (\App\Models\Words::orderBy('id')->get() as $data){
    $arr[$data->key] = $data->uz;
}
return $arr;
