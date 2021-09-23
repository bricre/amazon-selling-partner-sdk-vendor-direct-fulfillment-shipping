<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Details of item quantity.
 */
class ItemQuantity extends AbstractModel
{
    /**
     * Quantity of units shipped for a specific item at a shipment level. If the item
     * is present only in certain packages or pallets within the shipment, please
     * provide this at the appropriate package or pallet level.
     *
     * @var int
     */
    public $amount = null;

    /**
     * Unit of measure for the shipped quantity.
     *
     * @var string
     */
    public $unitOfMeasure = null;
}
