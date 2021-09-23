<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Packing slip information.
 */
class PackingSlip extends AbstractModel
{
    /**
     * Purchase order number of the shipment that the packing slip is for.
     *
     * @var string
     */
    public $purchaseOrderNumber = null;

    /**
     * A Base64encoded string of the packing slip PDF.
     *
     * @var string
     */
    public $content = null;

    /**
     * The format of the file such as PDF, JPEG etc.
     *
     * @var string
     */
    public $contentType = null;
}
