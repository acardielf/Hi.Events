<?php

namespace HiEvents\DomainObjects;

class AccountConfigurationDomainObject extends Generated\AccountConfigurationDomainObjectAbstract
{
    public function getFixedApplicationFee(): float
    {
        return floatval($this->getApplicationFees()['fixed']) ?? config('app.default_application_fee_fixed');
    }

    public function getPercentageApplicationFee(): float
    {
        return floatval($this->getApplicationFees()['percentage']) ?? config('app.default_application_fee_percentage');
    }
}
