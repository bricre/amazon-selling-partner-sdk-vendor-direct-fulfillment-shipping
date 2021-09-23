<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class SubmitShipmentStatusUpdatesRequest extends AbstractModel
{
    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\ShipmentStatusUpdate[]
     */
    public $shipmentStatusUpdates = null;
}
