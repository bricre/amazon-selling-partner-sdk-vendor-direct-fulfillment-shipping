<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class CustomerInvoice extends AbstractModel
{
    /**
     * The purchase order number for this order.
     *
     * @var string
     */
    public $purchaseOrderNumber = null;

    /**
     * The Base64encoded customer invoice.
     *
     * @var string
     */
    public $content = null;
}
