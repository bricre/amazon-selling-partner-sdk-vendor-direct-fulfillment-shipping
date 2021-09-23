<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class PackedItem extends AbstractModel
{
    /**
     * Item Sequence Number for the item. This must be the same value as sent in the
     * order for a given item.
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
     * was sent in the Purchase Order, like SKU Number.
     *
     * @var string
     */
    public $vendorProductIdentifier = null;

    /**
     * Total item quantity packed in the container.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\ItemQuantity
     */
    public $packedQuantity = null;
}
