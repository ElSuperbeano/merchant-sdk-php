<?php
namespace PayPal\PayPalAPI;

use PayPal\CoreComponentTypes\BasicAmountType;
use PayPal\EBLBaseComponents\AbstractResponseType;

class GetBalanceResponseType extends AbstractResponseType
{

    /**
     * @access public
     * @namespace ns
     * @var BasicAmountType
     */
    public $Balance;

    /**
     * @access public
     * @namespace ns
     * @var string dateTime
     */
    public $BalanceTimeStamp;

    /**
     * @array
     * @access public
     * @namespace ns
     * @var BasicAmountType
     */
    public $BalanceHoldings;
}
