<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Details of the item being shipped.
 */
class Item extends AbstractModel
{
    /**
     * Item Sequence Number for the item. This must be the same value as sent in order
     * for a given item.
     *
     * @var int
     */
    public $itemSequenceNumber = null;

    /**
     * Buyer's Standard Identification Number (ASIN) of an item. Either
     * buyerProductIdentifier or vendorProductIdentifier is required.
     *
     * @var string
     */
    public $buyerProductIdentifier = null;

    /**
     * The vendor selected product identification of the item. Should be the same as
     * was sent in the purchase order, like SKU Number.
     *
     * @var string
     */
    public $vendorProductIdentifier = null;

    /**
     * Total item quantity shipped in this shipment.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\ItemQuantity
     */
    public $shippedQuantity = null;
}
