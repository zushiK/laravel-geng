<?php

namespace App\Enums;

enum MailTemplateName: int
{
    case ORDER_ACCEPTANCE = 1;
    case ORDER_RECEPTION = 2;
    case ORDER_CANCELLATION = 3;
    case ORDER_CONFIRMATION = 4;
    case INQUIRY = 5;
    case SUBSCRIPTION = 101;
    case SUBSCRIPTION_FAILURE = 102;
    case ORDER_NOTIFICATION = 200;
    case POINT_EXPIRATION = 300;
    case DELIVERY_COMPLETION = 9625;

    public function label(): string
    {
        return match ($this) {
            MailTemplateName::ORDER_ACCEPTANCE => "注文受付メール",
              MailTemplateName::ORDER_RECEPTION => "注文受付メール(携帯)",
              MailTemplateName::ORDER_CANCELLATION => "注文キャンセル受付メール",
              MailTemplateName::ORDER_CONFIRMATION => "取り寄せ確認メール",
              MailTemplateName::INQUIRY => "お問い合わせ受付メール",
              MailTemplateName::SUBSCRIPTION => "定期注文メール",
              MailTemplateName::SUBSCRIPTION_FAILURE => "定期注文失敗メール",
              MailTemplateName::ORDER_NOTIFICATION => "受注通知日報メール",
              MailTemplateName::POINT_EXPIRATION => "ポイント有効期限通知メール",
              MailTemplateName::DELIVERY_COMPLETION => "配送完了メール",
        };
    }
}
