<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
class GlobalHelper
{

    public static function getPermissionsByRoutes(): array
    {
        $routeCollection = Route::getRoutes()->get();
        $permissions = [];
        foreach ($routeCollection as $item) {
            $name = $item->action;
            if (!empty($name['as'])) {
                $permission = $name['as'];
                $permission = trim(strtolower($permission));
                $permission = preg_replace('/[\s.,-]+/', ' ', $permission);
                $ignoreRoutesStartingWith = 'sanctum|livewire|ignition|verification|dashboard|password|logout|register|login';
                $permissionFilled = trim(str_replace("user management ", "", $permission));
                if (preg_match("($ignoreRoutesStartingWith)", $permission) === 0 && filled($permissionFilled)) $permissions[] = $permissionFilled;
            }
        }

        return $permissions;
    }


    public static function is_int_mutated($var)
    {
        $tmp = (int) $var;

        return ($tmp == $var) ? true : false;
    }

    public static function getPageTitle(): string
    {
        $lastSegment = ucwords(last(request()->segments()));

        return self::is_int_mutated($lastSegment)
            ? ucwords(request()->segment(count(request()->segments()) - 1)) . ' - ' . $lastSegment
            : $lastSegment;
    }


    public static function getResourcePermissionsMethods($type): array
    {
        $resourceMethods = ['index', 'create', 'show', 'store', 'update', 'destroy'];

        foreach ($resourceMethods as $key => $method) $result[] = ["$type $method", $method];

        return $result;
    }
  public static function lms_upload_img($img_file, $folder_name)
  {
      $imgpath = 'public/lms/'.$folder_name;
      File::makeDirectory($imgpath, $mode = 0777, true, true);
      $imgDestinationPath = $imgpath.'/';
      $file_name = time().'_'.$img_file->getClientOriginalName();
      $success = $img_file->move($imgDestinationPath, $file_name);

      return $file_name;
  }
}
