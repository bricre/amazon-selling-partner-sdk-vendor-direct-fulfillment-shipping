<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A list of packing slips.
 */
class PackingSlipList extends AbstractModel
{
    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\Pagination
     */
    public $pagination = null;

    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\PackingSlip[]
     */
    public $packingSlips = null;
}
