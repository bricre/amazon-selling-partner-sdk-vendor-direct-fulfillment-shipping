<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getShippingLabel operation.
 */
class GetShippingLabelResponse extends AbstractModel
{
    /**
     * The payload for the getShippingLabel operation.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\ShippingLabel
     */
    public $payload = null;

    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\ErrorList
     */
    public $errors = null;
}
