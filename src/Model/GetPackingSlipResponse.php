<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class GetPackingSlipResponse extends AbstractModel
{
    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\PackingSlip
     */
    public $payload = null;

    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\ErrorList
     */
    public $errors = null;
}
