<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class SubmitShippingLabelsRequest extends AbstractModel
{
    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\ShippingLabelRequest[]
     */
    public $shippingLabelRequests = null;
}
