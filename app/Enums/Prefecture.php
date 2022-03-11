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
              Prefecture::AOMORI => "青森",
              Prefecture::IWATE => "岩手",
              Prefecture::MIYAGI => "宮城",
              Prefecture::AKITA => "秋田",
              Prefecture::YAMAGATA => "山形",
              Prefecture::FUKUSHIMA => "福島",
              Prefecture::IBARAKI => "茨城",
              Prefecture::TOCHIGI => "栃木",
              Prefecture::GUNMA => "群馬",
              Prefecture::SAITAMA => "埼玉",
              Prefecture::CHIBA => "千葉",
              Prefecture::TOKYO => "東京",
              Prefecture::KANAGAWA => "神奈川",
              Prefecture::NIIGATA => "新潟",
              Prefecture::TOYAMA => "富山",
              Prefecture::ISHIKAWA => "石川",
              Prefecture::FUKUI => "福井",
              Prefecture::YAMANASHI => "山梨",
              Prefecture::NAGANO => "長野",
              Prefecture::GIFU => "岐阜",
              Prefecture::SHIZUOKA => "静岡",
              Prefecture::AICHI => "愛知",
              Prefecture::MIE => "三重",
              Prefecture::SHIGA => "滋賀",
              Prefecture::KYOTO => "京都",
              Prefecture::OSAKA => "大阪",
              Prefecture::HYOGO => "兵庫",
              Prefecture::NARA => "奈良",
              Prefecture::WAKAYAMA => "和歌山",
              Prefecture::TOTTORI => "鳥取",
              Prefecture::SHIMANE => "島根",
              Prefecture::OKAYAMA => "岡山",
              Prefecture::HIROSHIMA => "広島",
              Prefecture::YAMAGUCHI => "山口",
              Prefecture::TOKUSHIMA => "徳島",
              Prefecture::KAGAWA => "香川",
              Prefecture::EHIME => "愛媛",
              Prefecture::KOCHI => "高知",
              Prefecture::FUKUOKA => "福岡",
              Prefecture::SAGA => "佐賀",
              Prefecture::NAGASAKI => "長崎",
              Prefecture::KUMAMOTO => "熊本",
              Prefecture::OITA => "大分",
              Prefecture::MIYAZAKI => "宮崎",
              Prefecture::KAGOSHIMA => "鹿児島",
              Prefecture::OKINAWA => "沖縄"
          };

      }
}
