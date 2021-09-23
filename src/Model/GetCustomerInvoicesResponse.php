<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getCustomerInvoices operation.
 */
class GetCustomerInvoicesResponse extends AbstractModel
{
    /**
     * List of customer invoices.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\CustomerInvoiceList
     */
    public $payload = null;

    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\ErrorList
     */
    public $errors = null;
}
