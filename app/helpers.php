<?php

use App\Models\Section2;


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

function trimText($str) {
  if (strlen($str) > 140)
  {
      $str = substr($str, 0, 140);
      $str = explode(' ', $str);
      array_pop($str); // remove last word from array
      $str = implode(' ', $str);
      $str = $str . ' ...';
  }
  return $str;
}

function getProduct()
{
    $data = Section2::all();
    return $data;
}
