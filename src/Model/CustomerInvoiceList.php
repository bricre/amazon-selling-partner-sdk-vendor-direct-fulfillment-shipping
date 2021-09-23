<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class CustomerInvoiceList extends AbstractModel
{
    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\Pagination
     */
    public $pagination = null;

    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\CustomerInvoice[]
     */
    public $customerInvoices = null;
}
