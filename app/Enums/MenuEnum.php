<?php

namespace App\Enums;

use BenSampo\Enum\Enum;


final class MenuEnum extends Enum
{
    /** イベント */
    public const EVENT = 1;
    /** 学生 */
    public const USER = 2;
    /** 企業 */
    public const COMPANY = 3;
    /** 募集要項 */
    public const RECRUIT_GUIDE = 4;
    /** インターンシップ */
    public const INTERNSHIP = 5;
    /** 加盟店 */
    public const PARTNER = 6;
    /** お知らせ */
    public const INFO = 7;
    /** DM/メール */
    public const DM_MAIL = 8;
    /** 管理 */
    public const MANAGEMENT = 9;
    /** コンテンツ */
    public const CONTENT = 10;

    public const DISCLOSURE = 11;

    /**
     * 表示値を取得
     *
     * @param $value
     * @return string
     */
    public static function getDispValue($value, $type = null): string
    {
        switch ($value) {
            case self::EVENT:
                return 'イベント';
                break;
            case self::USER:
                return '学生';
                break;
            case self::COMPANY:
                return '企業';
                break;
            case self::RECRUIT_GUIDE:
                return '募集要項';
                break;
            case self::INTERNSHIP:
                return 'インターンシップ';
                break;
            case self::PARTNER:
                return '加盟店';
                break;
            case self::INFO:
                return 'コンテンツ';
                break;
            case self::DM_MAIL:
                return 'DM/メール';
                break;
            case self::MANAGEMENT:
                return '管理';
                break;
            case self::DISCLOSURE:
                return 'ディスクロージャー';
                break;
            default:
                return self::getKey($value);
        }
    }
}
