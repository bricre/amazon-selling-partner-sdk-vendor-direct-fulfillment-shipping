<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the submitShipmentStatusUpdates operation.
 */
class SubmitShipmentStatusUpdatesResponse extends AbstractModel
{
    /**
     * The response payload for the submitShipmentStatusUpdates operation.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\TransactionReference
     */
    public $payload = null;

    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\ErrorList
     */
    public $errors = null;
}
