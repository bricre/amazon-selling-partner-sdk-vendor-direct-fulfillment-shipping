<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class ShippingLabelRequest extends AbstractModel
{
    /**
     * Purchase order number of the order for which to create a shipping label.
     *
     * @var string
     */
    public $purchaseOrderNumber = null;

    /**
     * ID of the selling party or vendor.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\PartyIdentification
     */
    public $sellingParty = null;

    /**
     * Warehouse code of vendor.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\PartyIdentification
     */
    public $shipFromParty = null;

    /**
     * A list of the packages in this shipment.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\Container[]
     */
    public $containers = null;
}
