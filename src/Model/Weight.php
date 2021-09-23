<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The weight.
 */
class Weight extends AbstractModel
{
    /**
     * The unit of measurement.
     *
     * @var string
     */
    public $unitOfMeasure = null;

    /**
     * The measurement value.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\Decimal
     */
    public $value = null;
}
