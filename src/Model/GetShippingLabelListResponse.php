<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getShippingLabels operation.
 */
class GetShippingLabelListResponse extends AbstractModel
{
    /**
     * List of ship labels.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\ShippingLabelList
     */
    public $payload = null;

    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\ErrorList
     */
    public $errors = null;
}
