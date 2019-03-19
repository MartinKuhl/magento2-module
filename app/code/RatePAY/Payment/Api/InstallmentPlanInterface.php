<?php

namespace RatePAY\Payment\Api;

interface InstallmentPlanInterface
{
    /**
     * Return installment plan details
     *
     * @param string $calcType
     * @param string $calcValue
     * @return \RatePAY\Payment\Service\V1\Data\InstallmentPlanResponse
     */
    public function getInstallmentPlan($calcType, $calcValue);
}
