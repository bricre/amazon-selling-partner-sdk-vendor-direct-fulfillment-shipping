<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class ShippingLabelList extends AbstractModel
{
    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\Pagination
     */
    public $pagination = null;

    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\ShippingLabel[]
     */
    public $shippingLabels = null;
}
