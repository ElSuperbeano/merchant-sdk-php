<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractRequestType;

class InitiateRecoupRequestType extends AbstractRequestType
{

    /**
     * @access public
     * @namespace ed
     * @var \PayPal\EnhancedDataTypes\EnhancedInitiateRecoupRequestDetailsType
     */
    public $EnhancedInitiateRecoupRequestDetails;

    /**
     * Constructor with arguments
     * @param string $EnhancedInitiateRecoupRequestDetails
     */
    public function __construct($EnhancedInitiateRecoupRequestDetails = null)
    {
        $this->EnhancedInitiateRecoupRequestDetails = $EnhancedInitiateRecoupRequestDetails;
    }
}
