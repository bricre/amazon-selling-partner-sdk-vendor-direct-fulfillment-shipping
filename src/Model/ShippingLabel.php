<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class ShippingLabel extends AbstractModel
{
    /**
     * This field will contain the Purchase Order Number for this order.
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
     * Format of the label.
     *
     * @var string
     */
    public $labelFormat = null;

    /**
     * Provides the details of the packages in this shipment.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\LabelData[]
     */
    public $labelData = null;
}
