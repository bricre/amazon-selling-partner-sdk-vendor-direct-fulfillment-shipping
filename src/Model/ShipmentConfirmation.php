<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class ShipmentConfirmation extends AbstractModel
{
    /**
     * Purchase order number corresponding to the shipment.
     *
     * @var string
     */
    public $purchaseOrderNumber = null;

    /**
     * Shipment information.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\ShipmentDetails
     */
    public $shipmentDetails = null;

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
     * Provide the details of the items in this shipment. If any of the item details
     * field is common at a package or a pallet level, then provide them at the
     * corresponding package.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\Item[]
     */
    public $items = null;

    /**
     * Provide the details of the items in this shipment. If any of the item details
     * field is common at a package or a pallet level, then provide them at the
     * corresponding package.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\Container[]
     */
    public $containers = null;
}
