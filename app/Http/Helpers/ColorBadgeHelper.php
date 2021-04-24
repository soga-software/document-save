<?php

namespace App\Http\Helpers;

class ColorBadgeHelper
{
    public static function changeColerBadge($typeSite)
    {
        switch (strtoupper($typeSite)) {
            case 'VIBLO':
                return 'primary';
                break;
            case 'GITHUB':
                return 'info';
                break;
            case 'YOUTUBE':
                return 'danger';
                break;
            case 'JAVAPOINT':
                return 'success';
                break;
            case 'KIPALOG':
                return 'success';
                break;
            default:
                break;
        }
    }
}