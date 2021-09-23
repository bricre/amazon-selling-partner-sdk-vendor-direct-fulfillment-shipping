<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getCustomerInvoice operation.
 */
class GetCustomerInvoiceResponse extends AbstractModel
{
    /**
     * The payload for the getCustomerInvoice operation.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\CustomerInvoice
     */
    public $payload = null;

    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\ErrorList
     */
    public $errors = null;
}
