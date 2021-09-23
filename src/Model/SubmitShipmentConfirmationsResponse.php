<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the submitShipmentConfirmations operation.
 */
class SubmitShipmentConfirmationsResponse extends AbstractModel
{
    /**
     * The response payload for the submitShipmentConfirmations operation.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\TransactionReference
     */
    public $payload = null;

    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\ErrorList
     */
    public $errors = null;
}
