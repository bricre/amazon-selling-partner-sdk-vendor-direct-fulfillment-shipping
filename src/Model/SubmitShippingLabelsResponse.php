<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the submitShippingLabelRequest operation.
 */
class SubmitShippingLabelsResponse extends AbstractModel
{
    /**
     * The response payload for the submitShippingLabelRequest operation.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\TransactionReference
     */
    public $payload = null;

    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\ErrorList
     */
    public $errors = null;
}
