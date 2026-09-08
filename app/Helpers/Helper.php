<?php

use App\Models\Setting;

if (!function_exists('getSetting')) {
    /**
     * @return mixed
     */
    function getSetting(): ?Setting
    {
        return Setting::orderBy('id', 'DESC')->first();
    }
}

if (!function_exists('getPhoto')) {
    function getPhoto($path): string
    {
        if ($path) {
            $ppath = public_path($path);
            if (file_exists($ppath)) {
                return asset($path);
            } else {
                return asset('default.jpg');
            }
        } else {
            return asset('default.jpg');
        }
    }
}

if (!function_exists('getIcon')) {
    function getIcon($path = null): string
    {
        if ($path) {
            $ppath = public_path($path);
            if (file_exists($ppath)) {
                return asset($path);
            } else {
                return asset('assets/images/default-icon.png');
            }
        } else {
            return asset('assets/images/default-icon.png');
        }
    }
}


if (!function_exists('uploadGeneralImage')) {


function uploadGeneralImage($file, $folder, $oldImage = null)
{
if (!$file) {
return $oldImage;
}


// Delete old image if exists
if ($oldImage && file_exists(public_path($oldImage))) {
@unlink(public_path($oldImage));
}


$path = 'uploads/' . $folder;
$filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();


$file->move(public_path($path), $filename);


return $path . '/' . $filename;
}
}


if (!function_exists('getProfile')) {
    function getProfile($path = null): string
    {
        if ($path) {
            $ppath = public_path($path);
            if (file_exists($ppath)) {
                return asset($path);
            } else {
                return asset('no-image.png');
            }
        } else {
            return asset('no-image.png');
        }
    }
}

if (!function_exists('cmsImage')) {
    function cmsImage(?string $path, string $fallback = 'no-image.png'): string
    {
        if (!$path) {
            return asset($fallback);
        }
        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://')) {
            return $path;
        }
        if (file_exists(public_path($path))) {
            return asset($path);
        }
        return asset($fallback);
    }
}
