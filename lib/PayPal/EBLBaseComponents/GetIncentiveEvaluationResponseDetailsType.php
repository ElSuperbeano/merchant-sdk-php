<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

class GetIncentiveEvaluationResponseDetailsType extends PPXmlMessage
{

    /**
     * @array
     * @access public
     * @namespace ebl
     * @var IncentiveDetailType
     */
    public $IncentiveDetails;

    /**
     * @access public
     * @namespace ebl
     * @var string
     */
    public $RequestId;
}
