<?php

namespace Findstar\Src\Step1;


class PurchaseHandlerSample {


    public function purchase($userId, $productCode)
    {
        $user = new User($userId);
        $userEmail = $user->getEmail();

        $mailer = new Mailer();
        $mailer->setEmail($userEmail);
        $mailer->setContent(MailTemplate::getPurchaseContent());
        $mailer->sendEmail();

        $product = new Product($productCode);
        $productPrice = $product->getPrice();

        // ......

    }

}
