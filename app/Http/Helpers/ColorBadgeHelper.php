<?php
namespace App\Http\Helpers;

class ColorBadgeHelper
{
    public static function changeColerBadge($typeSite){
        switch (strtoupper($typeSite)) {
            case 'VIBLO':
                return 'primary';
                break;
            case 'GITHUB':
                return 'dark';
                break;
            case 'YOUTUBE':
                return 'danger';
                break;
            default:
                break;
        }
    }
}