<?php
namespace PayPal\EBLBaseComponents;

use PayPal\Core\PPXmlMessage;

/**
 * Details of Risk Filter.
 */
class RiskFilterListType extends PPXmlMessage
{

    /**
     * @array
     * @access public
     * @namespace ebl
     * @var RiskFilterDetailsType
     */
    public $Filters;
}
