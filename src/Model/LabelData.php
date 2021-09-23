<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Details of the shipment label.
 */
class LabelData extends AbstractModel
{
    /**
     * Identifier for the package. The first package will be 001, the second 002, and
     * so on. This number is used as a reference to refer to this package from the
     * pallet level.
     *
     * @var string
     */
    public $packageIdentifier = null;

    /**
     * Package tracking identifier from the shipping carrier.
     *
     * @var string
     */
    public $trackingNumber = null;

    /**
     * Ship method to be used for shipping the order. Amazon defines Ship Method Codes
     * indicating shipping carrier and shipment service level. Ship Method Codes are
     * case and format sensitive. The same ship method code should returned on the
     * shipment confirmation. Note that the Ship Method Codes are vendor specific and
     * will be provided to each vendor during the implementation.
     *
     * @var string
     */
    public $shipMethod = null;

    /**
     * Shipping method name for internal reference.
     *
     * @var string
     */
    public $shipMethodName = null;

    /**
     * This field will contain the Base64encoded string of the shipment label content.
     *
     * @var string
     */
    public $content = null;
}
