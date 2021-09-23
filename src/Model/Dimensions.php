<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Physical dimensional measurements of a container.
 */
class Dimensions extends AbstractModel
{
    /**
     * The length of the container.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\Decimal
     */
    public $length = null;

    /**
     * The width of the container.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\Decimal
     */
    public $width = null;

    /**
     * The height of the container.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\Decimal
     */
    public $height = null;

    /**
     * The unit of measure for dimensions.
     *
     * @var string
     */
    public $unitOfMeasure = null;
}
