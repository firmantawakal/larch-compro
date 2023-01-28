<?php

function active_class($path, $active = 'active') {
  return call_user_func_array('Request::is', (array)$path) ? $active : '';
}

function active_class_front($path, $active = 'current-menu-item') {
  return call_user_func_array('Request::is', (array)$path) ? $active : '';
}

function is_active_route($path) {
  return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
}

function show_class($path) {
  return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
}

function dateIndo($date) {
    // $dt = $date->isoFormat('D MMM Y');
    $dt = Carbon\Carbon::parse($date)->isoFormat('D MMM Y');
    return $dt;
}

function monthIndo($date) {
    $dt = Carbon\Carbon::parse($date)->isoFormat('MMM');
    return $dt;
}

function getTime($date) {
    $time = date('H:i', strtotime($date));
    return $time;
}
