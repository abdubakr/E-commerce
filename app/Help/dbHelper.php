<?php

// define
use \App\Setting as setting;
use \App\Contact as contact;
  // functions
  if (!function_exists('getSettings'))
  {
      function getSettings($name = 'site_title')
      {
          $setting = Setting::where('name', $name)->first();
          return $setting == null ? $name : $setting->Real_value;
      }
  }

if (!function_exists('getContact'))
{
    function getContact($type = 'data')
    {
        if ($type == 'data'){
            $contact = Contact::where('status',0)->orderBy('created_at','desc')->get();

        }else{
            $contact = Contact::where('status',0)->count();
        }
        return $contact;
    }
}