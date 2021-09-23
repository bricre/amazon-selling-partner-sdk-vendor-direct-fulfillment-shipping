<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class SubmitShipmentConfirmationsRequest extends AbstractModel
{
    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\ShipmentConfirmation[]
     */
    public $shipmentConfirmations = null;
}
