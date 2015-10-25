<?php
namespace PayPal\PayPalAPI;

use PayPal\Core\PPXmlMessage;

class SetMobileCheckoutReq extends PPXmlMessage
{

    /**
     * @access public
     * @namespace ns
     * @var SetMobileCheckoutRequestType
     */
    public $SetMobileCheckoutRequest;


    public function toXMLString()
    {
        $str = '';
        $str .= '<ns:SetMobileCheckoutReq>';
        if ($this->SetMobileCheckoutRequest != null) {
            $str .= '<ns:SetMobileCheckoutRequest>';
            $str .= $this->SetMobileCheckoutRequest->toXMLString();
            $str .= '</ns:SetMobileCheckoutRequest>';
        }
        $str .= '</ns:SetMobileCheckoutReq>';

        return $str;
    }
}
