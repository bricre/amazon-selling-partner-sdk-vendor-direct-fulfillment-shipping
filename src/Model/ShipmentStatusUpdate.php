<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class ShipmentStatusUpdate extends AbstractModel
{
    /**
     * Purchase order number of the shipment for which to update the shipment status.
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
     * Provide the details about the status of the shipment at that particular point of
     * time.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\StatusUpdateDetails
     */
    public $statusUpdateDetails = null;
}
