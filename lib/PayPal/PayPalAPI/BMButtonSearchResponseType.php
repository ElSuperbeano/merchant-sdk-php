<?php
namespace PayPal\PayPalAPI;

use PayPal\EBLBaseComponents\AbstractResponseType;
use PayPal\EBLBaseComponents\ButtonSearchResultType;

class BMButtonSearchResponseType extends AbstractResponseType
{

    /**
     * @array
     * @access public
     * @namespace ebl
     * @var ButtonSearchResultType
     */
    public $ButtonSearchResult;
}
