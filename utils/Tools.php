<?php

require_once('Constants.php');
class Tools
{
    static function getAppType($appIndex) {
        if ($appIndex == Constants::CODE_SHOPPING)
            return Constants::SHOPPING;
        if ($appIndex == Constants::CODE_RESTAURANT)
            return Constants::RESTAURANT;
        if ($appIndex == Constants::CODE_INSURANCE)
            return Constants::INSURANCE;
        if ($appIndex == Constants::CODE_ANDROID_POS)
            return Constants::ANDROID_POS;
        if ($appIndex == Constants::CODE_REAL_ESTATE)
            return Constants::REAL_ESTATE;
        if ($appIndex == Constants::CODE_BARCODE_PRINTER)
            return Constants::BARCODE_PRINTER;
        if ($appIndex == Constants::CODE_DISTRIBUTION)
            return Constants::DISTRIBUTION;
        if ($appIndex == Constants::CODE_PHOTOGRAPHY)
            return Constants::PHOTOGRAPHY;
        if ($appIndex == Constants::CODE_BUILDING)
            return Constants::BUILDING;
        if ($appIndex == Constants::CODE_MOBILE_ACCOUNTING)
            return Constants::MOBILE_ACCOUNTING;
        if ($appIndex == Constants::CODE_BARCODE_PRINTER)
            return Constants::BARCODE_PRINTER;
        else
            return Constants::MISCELLANEOUS;
    }
    static function getAppIcon($appIndex) {
        if ($appIndex == Constants::CODE_SHOPPING)
            return "img/app-icons/cashier.png";
        if ($appIndex == Constants::CODE_RESTAURANT)
            return "img/app-icons/fast-food.png";
        if ($appIndex == Constants::CODE_INSURANCE)
            return "img/app-icons/insurance.png";
        if ($appIndex == Constants::CODE_ANDROID_POS)
            return "img/app-icons/cashier.png";
        if ($appIndex == Constants::CODE_REAL_ESTATE)
            return "img/app-icons/cashier.png";
        if ($appIndex == Constants::CODE_BARCODE_PRINTER)
            return "img/app-icons/cashier.png";
        if ($appIndex == Constants::CODE_DISTRIBUTION)
            return "img/app-icons/cashier.png";
        if ($appIndex == Constants::CODE_PHOTOGRAPHY)
            return "img/app-icons/cashier.png";
        if ($appIndex == Constants::CODE_BUILDING)
            return "img/app-icons/cashier.png";
        if ($appIndex == Constants::CODE_MOBILE_ACCOUNTING)
            return "img/app-icons/cashier.png";
        if ($appIndex == Constants::CODE_BARCODE_PRINTER)
            return "img/app-icons/cashier.png";
    }
}