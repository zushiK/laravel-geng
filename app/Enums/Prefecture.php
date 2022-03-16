<?php

namespace App\Enums;

enum Prefecture: int
{
    case HOKKAIDO = 1;
    case AOMORI = 2;
    case IWATE = 3;
    case MIYAGI = 4;
    case AKITA = 5;
    case YAMAGATA = 6;
    case FUKUSHIMA = 7;
    case IBARAKI = 8;
    case TOCHIGI = 9;
    case GUNMA = 10;
    case SAITAMA = 11;
    case CHIBA = 12;
    case TOKYO = 13;
    case KANAGAWA = 14;
    case NIIGATA = 15;
    case TOYAMA = 16;
    case ISHIKAWA = 17;
    case FUKUI = 18;
    case YAMANASHI = 19;
    case NAGANO = 20;
    case GIFU = 21;
    case SHIZUOKA = 22;
    case AICHI = 23;
    case MIE = 24;
    case SHIGA = 25;
    case KYOTO = 26;
    case OSAKA = 27;
    case HYOGO = 28;
    case NARA = 29;
    case WAKAYAMA = 30;
    case TOTTORI = 31;
    case SHIMANE = 32;
    case OKAYAMA = 33;
    case HIROSHIMA = 34;
    case YAMAGUCHI = 35;
    case TOKUSHIMA = 36;
    case KAGAWA = 37;
    case EHIME = 38;
    case KOCHI = 39;
    case FUKUOKA = 40;
    case SAGA = 41;
    case NAGASAKI = 42;
    case KUMAMOTO = 43;
    case OITA = 44;
    case MIYAZAKI = 45;
    case KAGOSHIMA = 46;
    case OKINAWA = 47;

    public function label(): string
    {
        return match ($this) {
            Prefecture::HOKKAIDO => "北海道",
              Prefecture::AOMORI => "青森県",
              Prefecture::IWATE => "岩手県",
              Prefecture::MIYAGI => "宮城県",
              Prefecture::AKITA => "秋田県",
              Prefecture::YAMAGATA => "山形県",
              Prefecture::FUKUSHIMA => "福島県",
              Prefecture::IBARAKI => "茨城県",
              Prefecture::TOCHIGI => "栃木県",
              Prefecture::GUNMA => "群馬県",
              Prefecture::SAITAMA => "埼玉県",
              Prefecture::CHIBA => "千葉県",
              Prefecture::TOKYO => "東京都",
              Prefecture::KANAGAWA => "神奈川県",
              Prefecture::NIIGATA => "新潟県",
              Prefecture::TOYAMA => "富山県",
              Prefecture::ISHIKAWA => "石川県",
              Prefecture::FUKUI => "福井県",
              Prefecture::YAMANASHI => "山梨県",
              Prefecture::NAGANO => "長野県",
              Prefecture::GIFU => "岐阜県",
              Prefecture::SHIZUOKA => "静岡県",
              Prefecture::AICHI => "愛知県",
              Prefecture::MIE => "三重県",
              Prefecture::SHIGA => "滋賀県",
              Prefecture::KYOTO => "京都府",
              Prefecture::OSAKA => "大阪府",
              Prefecture::HYOGO => "兵庫県",
              Prefecture::NARA => "奈良県",
              Prefecture::WAKAYAMA => "和歌山県",
              Prefecture::TOTTORI => "鳥取県",
              Prefecture::SHIMANE => "島根県",
              Prefecture::OKAYAMA => "岡山県",
              Prefecture::HIROSHIMA => "広島県",
              Prefecture::YAMAGUCHI => "山口県",
              Prefecture::TOKUSHIMA => "徳島県",
              Prefecture::KAGAWA => "香川県",
              Prefecture::EHIME => "愛媛県",
              Prefecture::KOCHI => "高知県",
              Prefecture::FUKUOKA => "福岡県",
              Prefecture::SAGA => "佐賀県",
              Prefecture::NAGASAKI => "長崎県",
              Prefecture::KUMAMOTO => "熊本県",
              Prefecture::OITA => "大分県",
              Prefecture::MIYAZAKI => "宮崎県",
              Prefecture::KAGOSHIMA => "鹿児島県",
              Prefecture::OKINAWA => "沖縄県"
        };
    }

    public static function toArray(): array
    {
        $cases = static::cases();
        $array = [];
        foreach ($cases as $enum) {
            $array[$enum->value]['prefcode'] = $enum->value;
            $array[$enum->value]['prefname'] = $enum->label();
        }

        return $array;
    }
}
