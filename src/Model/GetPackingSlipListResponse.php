<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class GetPackingSlipListResponse extends AbstractModel
{
    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\PackingSlipList
     */
    public $payload = null;

    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\ErrorList
     */
    public $errors = null;
}
