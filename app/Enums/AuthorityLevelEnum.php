<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class AuthorityLevelEnum extends Enum
{
    /** 更新 */
    public const UPDATE = 9;
    /** なし */
    public const NONE = 0;

    /**
     * 表示値を取得
     *
     * @param $value
     * @return string
     */
    public static function getDispValue($value, $type = null): string
    {
        switch ($value) {
            case self::NONE:
                return 'なし';
                break;
            case self::UPDATE:
                return '更新';
                break;
            default:
                return self::getKey($value);
        }
    }
}
