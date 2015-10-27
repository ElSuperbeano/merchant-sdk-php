<?php
namespace PayPal\Service;

use PayPal\Common\PPApiContext;
use PayPal\Core\PPBaseService;
use PayPal\Core\PPUtils;
use PayPal\Handler\PPMerchantServiceHandler;
use PayPal\PayPalAPI\AddressVerifyResponseType;
use PayPal\PayPalAPI\BAUpdateResponseType;
use PayPal\PayPalAPI\BillOutstandingAmountResponseType;
use PayPal\PayPalAPI\BillUserResponseType;
use PayPal\PayPalAPI\CancelRecoupResponseType;
use PayPal\PayPalAPI\CompleteRecoupResponseType;
use PayPal\PayPalAPI\CreateBillingAgreementResponseType;
use PayPal\PayPalAPI\CreateMobilePaymentResponseType;
use PayPal\PayPalAPI\CreateRecurringPaymentsProfileResponseType;
use PayPal\PayPalAPI\DoAuthorizationResponseType;
use PayPal\PayPalAPI\DoCancelResponseType;
use PayPal\PayPalAPI\DoCaptureResponseType;
use PayPal\PayPalAPI\DoDirectPaymentResponseType;
use PayPal\PayPalAPI\DoExpressCheckoutPaymentResponseType;
use PayPal\PayPalAPI\DoMobileCheckoutPaymentResponseType;
use PayPal\PayPalAPI\DoNonReferencedCreditResponseType;
use PayPal\PayPalAPI\DoReauthorizationResponseType;
use PayPal\PayPalAPI\DoReferenceTransactionResponseType;
use PayPal\PayPalAPI\DoUATPAuthorizationResponseType;
use PayPal\PayPalAPI\DoUATPExpressCheckoutPaymentResponseType;
use PayPal\PayPalAPI\DoVoidResponseType;
use PayPal\PayPalAPI\EnterBoardingResponseType;
use PayPal\PayPalAPI\ExecuteCheckoutOperationsResponseType;
use PayPal\PayPalAPI\ExternalRememberMeOptOutResponseType;
use PayPal\PayPalAPI\GetAccessPermissionDetailsResponseType;
use PayPal\PayPalAPI\GetAuthDetailsResponseType;
use PayPal\PayPalAPI\GetBalanceResponseType;
use PayPal\PayPalAPI\GetBillingAgreementCustomerDetailsResponseType;
use PayPal\PayPalAPI\GetBoardingDetailsResponseType;
use PayPal\PayPalAPI\GetExpressCheckoutDetailsResponseType;
use PayPal\PayPalAPI\GetIncentiveEvaluationResponseType;
use PayPal\PayPalAPI\GetMobileStatusResponseType;
use PayPal\PayPalAPI\GetPalDetailsResponseType;
use PayPal\PayPalAPI\GetRecurringPaymentsProfileDetailsResponseType;
use PayPal\PayPalAPI\GetTransactionDetailsResponseType;
use PayPal\PayPalAPI\InitiateRecoupResponseType;
use PayPal\PayPalAPI\ManagePendingTransactionStatusResponseType;
use PayPal\PayPalAPI\ManageRecurringPaymentsProfileStatusResponseType;
use PayPal\PayPalAPI\MassPayResponseType;
use PayPal\PayPalAPI\RefundTransactionResponseType;
use PayPal\PayPalAPI\ReverseTransactionResponseType;
use PayPal\PayPalAPI\SetAccessPermissionsResponseType;
use PayPal\PayPalAPI\SetAuthFlowParamResponseType;
use PayPal\PayPalAPI\SetCustomerBillingAgreementResponseType;
use PayPal\PayPalAPI\SetExpressCheckoutResponseType;
use PayPal\PayPalAPI\SetMobileCheckoutResponseType;
use PayPal\PayPalAPI\TransactionSearchResponseType;
use PayPal\PayPalAPI\UpdateAccessPermissionsResponseType;
use PayPal\PayPalAPI\UpdateAuthorizationResponseType;
use PayPal\PayPalAPI\UpdateRecurringPaymentsProfileResponseType;

/**
 * AUTO GENERATED code for PayPalAPIInterfaceService
 */
class PayPalAPIInterfaceServiceService extends PPBaseService
{

    // Service Version
    private static $SERVICE_VERSION = "106.0";

    // Service Name
    private static $SERVICE_NAME = "PayPalAPIInterfaceService";

    // SDK Name
    protected static $SDK_NAME = "merchant-php-sdk";

    // SDK Version
    protected static $SDK_VERSION = "3.9.0";

    /**
     * @param $config - Dynamic config map. This takes the higher precedence if config file is also present.
     *
     */
    public function __construct($config = null)
    {
        parent::__construct(self::$SERVICE_NAME, 'SOAP', $config);
    }

    private function setStandardParams($request)
    {
        if ($request->Version == null) {
            $request->Version = self::$SERVICE_VERSION;
        }
    }

    /**
     * Service Call: RefundTransaction
     * @param \PayPal\PayPalAPI\RefundTransactionReq $refundTransactionReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return RefundTransactionResponseType
     * @throws \Exception
     */
    public function RefundTransaction($refundTransactionReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($refundTransactionReq->RefundTransactionRequest);
        $ret = new RefundTransactionResponseType();
        $resp = $this->call('PayPalAPI', 'RefundTransaction', $refundTransactionReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: InitiateRecoup
     * @param \PayPal\PayPalAPI\InitiateRecoupReq $initiateRecoupReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return InitiateRecoupResponseType
     * @throws \Exception
     */
    public function InitiateRecoup($initiateRecoupReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($initiateRecoupReq->InitiateRecoupRequest);
        $ret = new InitiateRecoupResponseType();
        $resp = $this->call('PayPalAPI', 'InitiateRecoup', $initiateRecoupReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: CompleteRecoup
     * @param \PayPal\PayPalAPI\CompleteRecoupReq $completeRecoupReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return CompleteRecoupResponseType
     * @throws \Exception
     */
    public function CompleteRecoup($completeRecoupReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($completeRecoupReq->CompleteRecoupRequest);
        $ret = new CompleteRecoupResponseType();
        $resp = $this->call('PayPalAPI', 'CompleteRecoup', $completeRecoupReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: CancelRecoup
     * @param \PayPal\PayPalAPI\CancelRecoupReq $cancelRecoupReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return CancelRecoupResponseType
     * @throws \Exception
     */
    public function CancelRecoup($cancelRecoupReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($cancelRecoupReq->CancelRecoupRequest);
        $ret = new CancelRecoupResponseType();
        $resp = $this->call('PayPalAPI', 'CancelRecoup', $cancelRecoupReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: GetTransactionDetails
     * @param \PayPal\PayPalAPI\GetTransactionDetailsReq $getTransactionDetailsReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return GetTransactionDetailsResponseType
     * @throws \Exception
     */
    public function GetTransactionDetails($getTransactionDetailsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getTransactionDetailsReq->GetTransactionDetailsRequest);
        $ret = new GetTransactionDetailsResponseType();
        $resp = $this->call('PayPalAPI', 'GetTransactionDetails', $getTransactionDetailsReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: BillUser
     * @param \PayPal\PayPalAPI\BillUserReq $billUserReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return BillUserResponseType
     * @throws \Exception
     */
    public function BillUser($billUserReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($billUserReq->BillUserRequest);
        $ret = new BillUserResponseType();
        $resp = $this->call('PayPalAPI', 'BillUser', $billUserReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: TransactionSearch
     * @param \PayPal\PayPalAPI\TransactionSearchReq $transactionSearchReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return TransactionSearchResponseType
     * @throws \Exception
     */
    public function TransactionSearch($transactionSearchReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($transactionSearchReq->TransactionSearchRequest);
        $ret = new TransactionSearchResponseType();
        $resp = $this->call('PayPalAPI', 'TransactionSearch', $transactionSearchReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: MassPay
     * @param \PayPal\PayPalAPI\MassPayReq $massPayReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return MassPayResponseType
     * @throws \Exception
     */
    public function MassPay($massPayReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($massPayReq->MassPayRequest);
        $ret = new MassPayResponseType();
        $resp = $this->call('PayPalAPI', 'MassPay', $massPayReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: BillAgreementUpdate
     * @param \PayPal\PayPalAPI\BillAgreementUpdateReq $billAgreementUpdateReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return BAUpdateResponseType
     * @throws \Exception
     */
    public function BillAgreementUpdate($billAgreementUpdateReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($billAgreementUpdateReq->BAUpdateRequest);
        $ret = new BAUpdateResponseType();
        $resp = $this->call('PayPalAPI', 'BillAgreementUpdate', $billAgreementUpdateReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: AddressVerify
     * @param \PayPal\PayPalAPI\AddressVerifyReq $addressVerifyReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return AddressVerifyResponseType
     * @throws \Exception
     */
    public function AddressVerify($addressVerifyReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($addressVerifyReq->AddressVerifyRequest);
        $ret = new AddressVerifyResponseType();
        $resp = $this->call('PayPalAPI', 'AddressVerify', $addressVerifyReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: EnterBoarding
     * @param \PayPal\PayPalAPI\EnterBoardingReq $enterBoardingReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return EnterBoardingResponseType
     * @throws \Exception
     */
    public function EnterBoarding($enterBoardingReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($enterBoardingReq->EnterBoardingRequest);
        $ret = new EnterBoardingResponseType();
        $resp = $this->call('PayPalAPI', 'EnterBoarding', $enterBoardingReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: GetBoardingDetails
     * @param \PayPal\PayPalAPI\GetBoardingDetailsReq $getBoardingDetailsReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return GetBoardingDetailsResponseType
     * @throws \Exception
     */
    public function GetBoardingDetails($getBoardingDetailsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getBoardingDetailsReq->GetBoardingDetailsRequest);
        $ret = new GetBoardingDetailsResponseType();
        $resp = $this->call('PayPalAPI', 'GetBoardingDetails', $getBoardingDetailsReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: CreateMobilePayment
     * @param \PayPal\PayPalAPI\CreateMobilePaymentReq $createMobilePaymentReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return CreateMobilePaymentResponseType
     * @throws \Exception
     */
    public function CreateMobilePayment($createMobilePaymentReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($createMobilePaymentReq->CreateMobilePaymentRequest);
        $ret = new CreateMobilePaymentResponseType();
        $resp = $this->call('PayPalAPI', 'CreateMobilePayment', $createMobilePaymentReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: GetMobileStatus
     * @param \PayPal\PayPalAPI\GetMobileStatusReq $getMobileStatusReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return GetMobileStatusResponseType
     * @throws \Exception
     */
    public function GetMobileStatus($getMobileStatusReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getMobileStatusReq->GetMobileStatusRequest);
        $ret = new GetMobileStatusResponseType();
        $resp = $this->call('PayPalAPI', 'GetMobileStatus', $getMobileStatusReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: SetMobileCheckout
     * @param \PayPal\PayPalAPI\SetMobileCheckoutReq $setMobileCheckoutReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return SetMobileCheckoutResponseType
     * @throws \Exception
     */
    public function SetMobileCheckout($setMobileCheckoutReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($setMobileCheckoutReq->SetMobileCheckoutRequest);
        $ret = new SetMobileCheckoutResponseType();
        $resp = $this->call('PayPalAPI', 'SetMobileCheckout', $setMobileCheckoutReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: DoMobileCheckoutPayment
     * @param \PayPal\PayPalAPI\DoMobileCheckoutPaymentReq $doMobileCheckoutPaymentReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return DoMobileCheckoutPaymentResponseType
     * @throws \Exception
     */
    public function DoMobileCheckoutPayment($doMobileCheckoutPaymentReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doMobileCheckoutPaymentReq->DoMobileCheckoutPaymentRequest);
        $ret = new DoMobileCheckoutPaymentResponseType();
        $resp = $this->call('PayPalAPI', 'DoMobileCheckoutPayment', $doMobileCheckoutPaymentReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: GetBalance
     * @param \PayPal\PayPalAPI\GetBalanceReq $getBalanceReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return GetBalanceResponseType
     * @throws \Exception
     */
    public function GetBalance($getBalanceReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getBalanceReq->GetBalanceRequest);
        $ret = new GetBalanceResponseType();
        $resp = $this->call('PayPalAPI', 'GetBalance', $getBalanceReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: GetPalDetails
     * @param \PayPal\PayPalAPI\GetPalDetailsReq $getPalDetailsReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return GetPalDetailsResponseType
     * @throws \Exception
     */
    public function GetPalDetails($getPalDetailsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getPalDetailsReq->GetPalDetailsRequest);
        $ret = new GetPalDetailsResponseType();
        $resp = $this->call('PayPalAPI', 'GetPalDetails', $getPalDetailsReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: DoExpressCheckoutPayment
     * @param \PayPal\PayPalAPI\DoExpressCheckoutPaymentReq $doExpressCheckoutPaymentReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return DoExpressCheckoutPaymentResponseType
     * @throws \Exception
     */
    public function DoExpressCheckoutPayment($doExpressCheckoutPaymentReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doExpressCheckoutPaymentReq->DoExpressCheckoutPaymentRequest);
        $ret = new DoExpressCheckoutPaymentResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoExpressCheckoutPayment', $doExpressCheckoutPaymentReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: DoUATPExpressCheckoutPayment
     * @param \PayPal\PayPalAPI\DoUATPExpressCheckoutPaymentReq $doUATPExpressCheckoutPaymentReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return DoUATPExpressCheckoutPaymentResponseType
     * @throws \Exception
     */
    public function DoUATPExpressCheckoutPayment($doUATPExpressCheckoutPaymentReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doUATPExpressCheckoutPaymentReq->DoUATPExpressCheckoutPaymentRequest);
        $ret = new DoUATPExpressCheckoutPaymentResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoUATPExpressCheckoutPayment', $doUATPExpressCheckoutPaymentReq,
            $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: SetAuthFlowParam
     * @param \PayPal\PayPalAPI\SetAuthFlowParamReq $setAuthFlowParamReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return SetAuthFlowParamResponseType
     * @throws \Exception
     */
    public function SetAuthFlowParam($setAuthFlowParamReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($setAuthFlowParamReq->SetAuthFlowParamRequest);
        $ret = new SetAuthFlowParamResponseType();
        $resp = $this->call('PayPalAPIAA', 'SetAuthFlowParam', $setAuthFlowParamReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: GetAuthDetails
     * @param \PayPal\PayPalAPI\GetAuthDetailsReq $getAuthDetailsReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return GetAuthDetailsResponseType
     * @throws \Exception
     */
    public function GetAuthDetails($getAuthDetailsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getAuthDetailsReq->GetAuthDetailsRequest);
        $ret = new GetAuthDetailsResponseType();
        $resp = $this->call('PayPalAPIAA', 'GetAuthDetails', $getAuthDetailsReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: SetAccessPermissions
     * @param \PayPal\PayPalAPI\SetAccessPermissionsReq $setAccessPermissionsReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return SetAccessPermissionsResponseType
     * @throws \Exception
     */
    public function SetAccessPermissions($setAccessPermissionsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($setAccessPermissionsReq->SetAccessPermissionsRequest);
        $ret = new SetAccessPermissionsResponseType();
        $resp = $this->call('PayPalAPIAA', 'SetAccessPermissions', $setAccessPermissionsReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: UpdateAccessPermissions
     * @param \PayPal\PayPalAPI\UpdateAccessPermissionsReq $updateAccessPermissionsReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return UpdateAccessPermissionsResponseType
     * @throws \Exception
     */
    public function UpdateAccessPermissions($updateAccessPermissionsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($updateAccessPermissionsReq->UpdateAccessPermissionsRequest);
        $ret = new UpdateAccessPermissionsResponseType();
        $resp = $this->call('PayPalAPIAA', 'UpdateAccessPermissions', $updateAccessPermissionsReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: GetAccessPermissionDetails
     * @param \PayPal\PayPalAPI\GetAccessPermissionDetailsReq $getAccessPermissionDetailsReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return GetAccessPermissionDetailsResponseType
     * @throws \Exception
     */
    public function GetAccessPermissionDetails($getAccessPermissionDetailsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getAccessPermissionDetailsReq->GetAccessPermissionDetailsRequest);
        $ret = new GetAccessPermissionDetailsResponseType();
        $resp = $this->call('PayPalAPIAA', 'GetAccessPermissionDetails', $getAccessPermissionDetailsReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: GetIncentiveEvaluation
     * @param \PayPal\PayPalAPI\GetIncentiveEvaluationReq $getIncentiveEvaluationReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return GetIncentiveEvaluationResponseType
     * @throws \Exception
     */
    public function GetIncentiveEvaluation($getIncentiveEvaluationReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getIncentiveEvaluationReq->GetIncentiveEvaluationRequest);
        $ret = new GetIncentiveEvaluationResponseType();
        $resp = $this->call('PayPalAPIAA', 'GetIncentiveEvaluation', $getIncentiveEvaluationReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: SetExpressCheckout
     * @param \PayPal\PayPalAPI\SetExpressCheckoutReq $setExpressCheckoutReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return SetExpressCheckoutResponseType
     * @throws \Exception
     */
    public function SetExpressCheckout($setExpressCheckoutReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($setExpressCheckoutReq->SetExpressCheckoutRequest);
        $ret = new SetExpressCheckoutResponseType();
        $resp = $this->call('PayPalAPIAA', 'SetExpressCheckout', $setExpressCheckoutReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: ExecuteCheckoutOperations
     * @param \PayPal\PayPalAPI\ExecuteCheckoutOperationsReq $executeCheckoutOperationsReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return ExecuteCheckoutOperationsResponseType
     * @throws \Exception
     */
    public function ExecuteCheckoutOperations($executeCheckoutOperationsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($executeCheckoutOperationsReq->ExecuteCheckoutOperationsRequest);
        $ret = new ExecuteCheckoutOperationsResponseType();
        $resp = $this->call('PayPalAPIAA', 'ExecuteCheckoutOperations', $executeCheckoutOperationsReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: GetExpressCheckoutDetails
     * @param \PayPal\PayPalAPI\GetExpressCheckoutDetailsReq $getExpressCheckoutDetailsReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return GetExpressCheckoutDetailsResponseType
     * @throws \Exception
     */
    public function GetExpressCheckoutDetails($getExpressCheckoutDetailsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getExpressCheckoutDetailsReq->GetExpressCheckoutDetailsRequest);
        $ret = new GetExpressCheckoutDetailsResponseType();
        $resp = $this->call('PayPalAPIAA', 'GetExpressCheckoutDetails', $getExpressCheckoutDetailsReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: DoDirectPayment
     * @param \PayPal\PayPalAPI\DoDirectPaymentReq $doDirectPaymentReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return DoDirectPaymentResponseType
     * @throws \Exception
     */
    public function DoDirectPayment($doDirectPaymentReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doDirectPaymentReq->DoDirectPaymentRequest);
        $ret = new DoDirectPaymentResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoDirectPayment', $doDirectPaymentReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: ManagePendingTransactionStatus
     * @param \PayPal\PayPalAPI\ManagePendingTransactionStatusReq $managePendingTransactionStatusReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return ManagePendingTransactionStatusResponseType
     * @throws \Exception
     */
    public function ManagePendingTransactionStatus($managePendingTransactionStatusReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($managePendingTransactionStatusReq->ManagePendingTransactionStatusRequest);
        $ret = new ManagePendingTransactionStatusResponseType();
        $resp = $this->call('PayPalAPIAA', 'ManagePendingTransactionStatus', $managePendingTransactionStatusReq,
            $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: DoCancel
     * @param \PayPal\PayPalAPI\DoCancelReq $doCancelReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return DoCancelResponseType
     * @throws \Exception
     */
    public function DoCancel($doCancelReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doCancelReq->DoCancelRequest);
        $ret = new DoCancelResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoCancel', $doCancelReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: DoCapture
     * @param \PayPal\PayPalAPI\DoCaptureReq $doCaptureReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return DoCaptureResponseType
     * @throws \Exception
     */
    public function DoCapture($doCaptureReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doCaptureReq->DoCaptureRequest);
        $ret = new DoCaptureResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoCapture', $doCaptureReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: DoReauthorization
     * @param \PayPal\PayPalAPI\DoReauthorizationReq $doReauthorizationReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return DoReauthorizationResponseType
     * @throws \Exception
     */
    public function DoReauthorization($doReauthorizationReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doReauthorizationReq->DoReauthorizationRequest);
        $ret = new DoReauthorizationResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoReauthorization', $doReauthorizationReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: DoVoid
     * @param \PayPal\PayPalAPI\DoVoidReq $doVoidReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return DoVoidResponseType
     * @throws \Exception
     */
    public function DoVoid($doVoidReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doVoidReq->DoVoidRequest);
        $ret = new DoVoidResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoVoid', $doVoidReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: DoAuthorization
     * @param \PayPal\PayPalAPI\DoAuthorizationReq $doAuthorizationReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return DoAuthorizationResponseType
     * @throws \Exception
     */
    public function DoAuthorization($doAuthorizationReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doAuthorizationReq->DoAuthorizationRequest);
        $ret = new DoAuthorizationResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoAuthorization', $doAuthorizationReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: UpdateAuthorization
     * @param \PayPal\PayPalAPI\UpdateAuthorizationReq $updateAuthorizationReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return UpdateAuthorizationResponseType
     * @throws \Exception
     */
    public function UpdateAuthorization($updateAuthorizationReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($updateAuthorizationReq->UpdateAuthorizationRequest);
        $ret = new UpdateAuthorizationResponseType();
        $resp = $this->call('PayPalAPIAA', 'UpdateAuthorization', $updateAuthorizationReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: SetCustomerBillingAgreement
     * @param \PayPal\PayPalAPI\SetCustomerBillingAgreementReq $setCustomerBillingAgreementReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return SetCustomerBillingAgreementResponseType
     * @throws \Exception
     */
    public function SetCustomerBillingAgreement($setCustomerBillingAgreementReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($setCustomerBillingAgreementReq->SetCustomerBillingAgreementRequest);
        $ret = new SetCustomerBillingAgreementResponseType();
        $resp = $this->call('PayPalAPIAA', 'SetCustomerBillingAgreement', $setCustomerBillingAgreementReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: GetBillingAgreementCustomerDetails
     * @param \PayPal\PayPalAPI\GetBillingAgreementCustomerDetailsReq $getBillingAgreementCustomerDetailsReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return GetBillingAgreementCustomerDetailsResponseType
     * @throws \Exception
     */
    public function GetBillingAgreementCustomerDetails($getBillingAgreementCustomerDetailsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getBillingAgreementCustomerDetailsReq->GetBillingAgreementCustomerDetailsRequest);
        $ret = new GetBillingAgreementCustomerDetailsResponseType();
        $resp = $this->call('PayPalAPIAA', 'GetBillingAgreementCustomerDetails', $getBillingAgreementCustomerDetailsReq,
            $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: CreateBillingAgreement
     * @param \PayPal\PayPalAPI\CreateBillingAgreementReq $createBillingAgreementReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return CreateBillingAgreementResponseType
     * @throws \Exception
     */
    public function CreateBillingAgreement($createBillingAgreementReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($createBillingAgreementReq->CreateBillingAgreementRequest);
        $ret = new CreateBillingAgreementResponseType();
        $resp = $this->call('PayPalAPIAA', 'CreateBillingAgreement', $createBillingAgreementReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: DoReferenceTransaction
     * @param \PayPal\PayPalAPI\DoReferenceTransactionReq $doReferenceTransactionReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return DoReferenceTransactionResponseType
     * @throws \Exception
     */
    public function DoReferenceTransaction($doReferenceTransactionReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doReferenceTransactionReq->DoReferenceTransactionRequest);
        $ret = new DoReferenceTransactionResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoReferenceTransaction', $doReferenceTransactionReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: DoNonReferencedCredit
     * @param \PayPal\PayPalAPI\DoNonReferencedCreditReq $doNonReferencedCreditReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return DoNonReferencedCreditResponseType
     * @throws \Exception
     */
    public function DoNonReferencedCredit($doNonReferencedCreditReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doNonReferencedCreditReq->DoNonReferencedCreditRequest);
        $ret = new DoNonReferencedCreditResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoNonReferencedCredit', $doNonReferencedCreditReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: DoUATPAuthorization
     * @param \PayPal\PayPalAPI\DoUATPAuthorizationReq $doUATPAuthorizationReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return DoUATPAuthorizationResponseType
     * @throws \Exception
     */
    public function DoUATPAuthorization($doUATPAuthorizationReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($doUATPAuthorizationReq->DoUATPAuthorizationRequest);
        $ret = new DoUATPAuthorizationResponseType();
        $resp = $this->call('PayPalAPIAA', 'DoUATPAuthorization', $doUATPAuthorizationReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: CreateRecurringPaymentsProfile
     * @param \PayPal\PayPalAPI\CreateRecurringPaymentsProfileReq $createRecurringPaymentsProfileReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return CreateRecurringPaymentsProfileResponseType
     * @throws \Exception
     */
    public function CreateRecurringPaymentsProfile($createRecurringPaymentsProfileReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($createRecurringPaymentsProfileReq->CreateRecurringPaymentsProfileRequest);
        $ret = new CreateRecurringPaymentsProfileResponseType();
        $resp = $this->call('PayPalAPIAA', 'CreateRecurringPaymentsProfile', $createRecurringPaymentsProfileReq,
            $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: GetRecurringPaymentsProfileDetails
     * @param \PayPal\PayPalAPI\GetRecurringPaymentsProfileDetailsReq $getRecurringPaymentsProfileDetailsReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return GetRecurringPaymentsProfileDetailsResponseType
     * @throws \Exception
     */
    public function GetRecurringPaymentsProfileDetails($getRecurringPaymentsProfileDetailsReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($getRecurringPaymentsProfileDetailsReq->GetRecurringPaymentsProfileDetailsRequest);
        $ret = new GetRecurringPaymentsProfileDetailsResponseType();
        $resp = $this->call('PayPalAPIAA', 'GetRecurringPaymentsProfileDetails', $getRecurringPaymentsProfileDetailsReq,
            $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: ManageRecurringPaymentsProfileStatus
     * @param \PayPal\PayPalAPI\ManageRecurringPaymentsProfileStatusReq $manageRecurringPaymentsProfileStatusReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return ManageRecurringPaymentsProfileStatusResponseType
     * @throws \Exception
     */
    public function ManageRecurringPaymentsProfileStatus(
        $manageRecurringPaymentsProfileStatusReq,
        $apiCredential = null
    ) {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($manageRecurringPaymentsProfileStatusReq->ManageRecurringPaymentsProfileStatusRequest);
        $ret = new ManageRecurringPaymentsProfileStatusResponseType();
        $resp = $this->call('PayPalAPIAA', 'ManageRecurringPaymentsProfileStatus',
            $manageRecurringPaymentsProfileStatusReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: BillOutstandingAmount
     * @param \PayPal\PayPalAPI\BillOutstandingAmountReq $billOutstandingAmountReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return BillOutstandingAmountResponseType
     * @throws \Exception
     */
    public function BillOutstandingAmount($billOutstandingAmountReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($billOutstandingAmountReq->BillOutstandingAmountRequest);
        $ret = new BillOutstandingAmountResponseType();
        $resp = $this->call('PayPalAPIAA', 'BillOutstandingAmount', $billOutstandingAmountReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: UpdateRecurringPaymentsProfile
     * @param \PayPal\PayPalAPI\UpdateRecurringPaymentsProfileReq $updateRecurringPaymentsProfileReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return UpdateRecurringPaymentsProfileResponseType
     * @throws \Exception
     */
    public function UpdateRecurringPaymentsProfile($updateRecurringPaymentsProfileReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($updateRecurringPaymentsProfileReq->UpdateRecurringPaymentsProfileRequest);
        $ret = new UpdateRecurringPaymentsProfileResponseType();
        $resp = $this->call('PayPalAPIAA', 'UpdateRecurringPaymentsProfile', $updateRecurringPaymentsProfileReq,
            $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: ReverseTransaction
     * @param \PayPal\PayPalAPI\ReverseTransactionReq $reverseTransactionReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return ReverseTransactionResponseType
     * @throws \Exception
     */
    public function ReverseTransaction($reverseTransactionReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($reverseTransactionReq->ReverseTransactionRequest);
        $ret = new ReverseTransactionResponseType();
        $resp = $this->call('PayPalAPIAA', 'ReverseTransaction', $reverseTransactionReq, $apiContext, $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }


    /**
     * Service Call: ExternalRememberMeOptOut
     * @param \PayPal\PayPalAPI\ExternalRememberMeOptOutReq $externalRememberMeOptOutReq
     * @param mixed $apiCredential - Optional API credential - can either be
     *        a username configured in sdk_config.ini or a ICredential object
     *        created dynamically
     * @return ExternalRememberMeOptOutResponseType
     * @throws \Exception
     */
    public function ExternalRememberMeOptOut($externalRememberMeOptOutReq, $apiCredential = null)
    {
        $apiContext = new PPApiContext($this->config);
        $handlers = array(
            new PPMerchantServiceHandler($apiCredential, self::$SDK_NAME, self::$SDK_VERSION),
        );
        $this->setStandardParams($externalRememberMeOptOutReq->ExternalRememberMeOptOutRequest);
        $ret = new ExternalRememberMeOptOutResponseType();
        $resp = $this->call('PayPalAPIAA', 'ExternalRememberMeOptOut', $externalRememberMeOptOutReq, $apiContext,
            $handlers);
        $ret->init(PPUtils::xmlToArray($resp));

        return $ret;
    }
}
