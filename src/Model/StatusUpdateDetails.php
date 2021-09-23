<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Details for the shipment status update given by the vendor for the specific
 * package.
 */
class StatusUpdateDetails extends AbstractModel
{
    /**
     * This is required to be provided for every package and should match with the
     * trackingNumber sent for the shipment confirmation.
     *
     * @var string
     */
    public $trackingNumber = null;

    /**
     * Indicates the shipment status code of the package that provides transportation
     * information for Amazon tracking systems and ultimately for the final customer.
     *
     * @var string
     */
    public $statusCode = null;

    /**
     * Provides a reason code for the status of the package that will provide
     * additional information about the transportation status.
     *
     * @var string
     */
    public $reasonCode = null;

    /**
     * The date and time when the shipment status was updated. This field is expected
     * to be in ISO-8601 date/time format, with UTC time zone or UTC offset. For
     * example, 2020-07-16T23:00:00Z or 2020-07-16T23:00:00+01:00.
     *
     * @var string
     */
    public $statusDateTime = null;

    /**
     * @var \Amz\VendorDirectFulfillmentShipping\Model\Address
     */
    public $statusLocationAddress = null;

    /**
     * @var object
     */
    public $shipmentSchedule = null;
}
