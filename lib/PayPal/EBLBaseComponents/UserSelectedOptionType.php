<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;
use PayPal\CoreComponentTypes\BasicAmountType;

/**
 * Information on user selected options
 */
class UserSelectedOptionType extends PPXmlMessage
{

    /**
     * @access public
     * @namespace ebl
     * @var string
     */
    public $ShippingCalculationMode;

    /**
     * @access public
     * @namespace ebl
     * @var string
     */
    public $InsuranceOptionSelected;

    /**
     * @access public
     * @namespace ebl
     * @var string
     */
    public $ShippingOptionIsDefault;

    /**
     * @access public
     * @namespace ebl
     * @var BasicAmountType
     */
    public $ShippingOptionAmount;

    /**
     * @access public
     * @namespace ebl
     * @var string
     */
    public $ShippingOptionName;
}
