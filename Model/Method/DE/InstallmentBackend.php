<?php
/**
 * Created by PhpStorm.
 * User: Robert
 * Date: 24.07.2019
 * Time: 11:26
 */

namespace RatePAY\Payment\Model\Method\DE;


class InstallmentBackend extends \RatePAY\Payment\Model\Method\DE\Installment
{
    const METHOD_CODE = parent::METHOD_CODE.self::BACKEND_SUFFIX;

    protected $_code = self::METHOD_CODE;
}