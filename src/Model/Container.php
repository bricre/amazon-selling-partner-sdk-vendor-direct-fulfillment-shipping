<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

class Container extends AbstractModel
{
    /**
     * The type of container.
     *
     * @var string
     */
    public $containerType = null;

    /**
     * The container identifier.
     *
     * @var string
     */
    public $containerIdentifier = null;

    /**
     * The tracking number.
     *
     * @var string
     */
    public $trackingNumber = null;

    /**
     * The manifest identifier.
     *
     * @var string
     */
    public $manifestId = null;

    /**
     * The date of the manifest.
     *
     * @var string
     */
    public $manifestDate = null;

    /**
     * The shipment method.
     *
     * @var string
     */
    public $shipMethod = null;

    /**
     * SCAC code required for NA VOC vendors only.
     *
     * @var string
     */
    public $scacCode = null;

    /**
     * Carrier required for EU VOC vendors only.
     *
     * @var string
     */
    public $carrier = null;

    /**
     * An integer that must be submitted for multi-box shipments only, where one item
     * may come in separate packages.
     *
     * @var int
     */
    public $containerSequenceNumber = null;

    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\Dimensions
     */
    public $dimensions = null;

    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\Weight
     */
    public $weight = null;

    /**
     * A list of packed items.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\PackedItem[]
     */
    public $packedItems = null;
}
