<?php

namespace App\Enums;

enum ShikakuStruct: int
{

  case Default = 0;
  case MG = 1;
  case GL = 2;
  case CBC = 3;
  case BC = 4;
  case Ippan = 5;

  public function label(): string
  {
      return match($this)
      {
        ShikakuStruct::Default => '未選択',
        ShikakuStruct::MG => 'MG',
        ShikakuStruct::GL => 'GL',
        ShikakuStruct::CBC => 'CBC',
        ShikakuStruct::BC => 'BC',
        ShikakuStruct::Ippan => '一般',
      };
  }
}