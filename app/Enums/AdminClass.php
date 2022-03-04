<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class AdminClass extends Enum
{
    /** 管理者 */
    public const ADMIN = 0;
    /** 企業 */
    public const COMPANY = 1;

    /**
     * 表示用の値を取得します。
     *
     * @param $value
     * @return string
     */
    public static function getDispValue($value, $type = null): string
    {
        switch ($value){
            case self::ADMIN:
                return 'admin';
                break;
            case self::COMPANY:
                return '企業';
                break;
            default:
                return self::getKey($value);
        }
    }
}
