<?php

namespace Amz\VendorDirectFulfillmentShipping\Api;

use Amz\VendorDirectFulfillmentShipping\Model\GetPackingSlipListResponse as GetPackingSlipListResponse;
use Amz\VendorDirectFulfillmentShipping\Model\GetPackingSlipResponse as GetPackingSlipResponse;
use Amz\VendorDirectFulfillmentShipping\Model\SubmitShipmentConfirmationsRequest as SubmitShipmentConfirmationsRequest;
use Amz\VendorDirectFulfillmentShipping\Model\SubmitShipmentConfirmationsResponse as SubmitShipmentConfirmationsResponse;
use Amz\VendorDirectFulfillmentShipping\Model\SubmitShipmentStatusUpdatesRequest as SubmitShipmentStatusUpdatesRequest;
use Amz\VendorDirectFulfillmentShipping\Model\SubmitShipmentStatusUpdatesResponse as SubmitShipmentStatusUpdatesResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class VendorShipping extends AbstractAPI
{
    /**
     * Submits one or more shipment confirmations for vendor orders.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param SubmitShipmentConfirmationsRequest $Model Submits one or more shipment
     *                                                  confirmations for vendor orders.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @return SubmitShipmentConfirmationsResponse
     */
    public function submitShipmentConfirmations(SubmitShipmentConfirmationsRequest $Model): SubmitShipmentConfirmationsResponse
    {
        return $this->client->request('submitShipmentConfirmations', 'POST', 'vendor/directFulfillment/shipping/v1/shipmentConfirmations',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * This API call is only to be used by Vendor-Own-Carrier (VOC) vendors. Calling
     * this API will submit a shipment status update for the package that a vendor has
     * shipped. It will provide the Amazon customer visibility on their order, when the
     * package is outside of Amazon Network visibility.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param SubmitShipmentStatusUpdatesRequest $Model This API call is only to be
     *                                                  used by Vendor-Own-Carrier (VOC) vendors. Calling this API will submit a
     *                                                  shipment status update for the package that a vendor has shipped. It will
     *                                                  provide the Amazon customer visibility on their order, when the package is
     *                                                  outside of Amazon Network visibility.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @return SubmitShipmentStatusUpdatesResponse
     */
    public function submitShipmentStatusUpdates(SubmitShipmentStatusUpdatesRequest $Model): SubmitShipmentStatusUpdatesResponse
    {
        return $this->client->request('submitShipmentStatusUpdates', 'POST', 'vendor/directFulfillment/shipping/v1/shipmentStatusUpdates',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Returns a list of packing slips for the purchase orders that match the criteria
     * specified. Date range to search must not be more than 7 days.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param array $queries options:
     *                       'shipFromPartyId'		The vendor warehouseId for order fulfillment. If not
     *                       specified the result will contain orders for all warehouses.
     *                       'limit'		The limit to the number of records returned
     *                       'createdAfter'		Packing slips that became available after this date and time
     *                       will be included in the result. Must be in ISO-8601 date/time format.
     *                       'createdBefore'		Packing slips that became available before this date and time
     *                       will be included in the result. Must be in ISO-8601 date/time format.
     *                       'nextToken'		Used for pagination when there are more packing slips than the
     *                       specified result size limit. The token value is returned in the previous API
     *                       call.
     *
     * @return GetPackingSlipListResponse
     */
    public function getPackingSlips(array $queries = []): GetPackingSlipListResponse
    {
        return $this->client->request('getPackingSlips', 'GET', 'vendor/directFulfillment/shipping/v1/packingSlips',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns a packing slip based on the purchaseOrderNumber that you specify.
     *
     * **Usage Plans:**
     *
     * | Plan type | Rate (requests per second) | Burst |
     * | ---- | ---- | ---- |
     * |Default| 10 | 10 |
     * |Selling partner specific| Variable | Variable |
     *
     * The x-amzn-RateLimit-Limit response header returns the usage plan rate limits
     * that were applied to the requested operation. Rate limits for some selling
     * partners will vary from the default rate and burst shown in the table above. For
     * more information, see "Usage Plans and Rate Limits" in the Selling Partner API
     * documentation.
     *
     * @param $purchaseOrderNumber The purchaseOrderNumber for the packing slip you
     * want
     *
     * @return GetPackingSlipResponse
     */
    public function getPackingSlip($purchaseOrderNumber): GetPackingSlipResponse
    {
        return $this->client->request('getPackingSlip', 'GET', "vendor/directFulfillment/shipping/v1/packingSlips/{$purchaseOrderNumber}",
            [
            ]
        );
    }
}
