<?php


namespace App\Constants;


class BannerConstants
{
    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';

    const CONDITION_BANNER = 'banner';
    const CONDITION_PROMO = 'promo';

    public static function getStatus() {
        return [
            self::STATUS_ACTIVE => __('general.active'),
            self::STATUS_INACTIVE => __('general.inactive'),
        ];
    }

    public static function getConditions() {
        return [
            self::CONDITION_BANNER => __('banner.banner'),
            self::CONDITION_PROMO => __('banner.promo'),
        ];
    }
}
