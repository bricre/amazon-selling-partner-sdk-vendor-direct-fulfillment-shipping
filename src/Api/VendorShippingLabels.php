<?php

namespace Amz\VendorDirectFulfillmentShipping\Api;

use Amz\VendorDirectFulfillmentShipping\Model\GetShippingLabelListResponse as GetShippingLabelListResponse;
use Amz\VendorDirectFulfillmentShipping\Model\GetShippingLabelResponse as GetShippingLabelResponse;
use Amz\VendorDirectFulfillmentShipping\Model\SubmitShippingLabelsRequest as SubmitShippingLabelsRequest;
use Amz\VendorDirectFulfillmentShipping\Model\SubmitShippingLabelsResponse as SubmitShippingLabelsResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class VendorShippingLabels extends AbstractAPI
{
    /**
     * Returns a list of shipping labels created during the time frame that you
     * specify. You define that time frame using the createdAfter and createdBefore
     * parameters. You must use both of these parameters. The date range to search must
     * not be more than 7 days.
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
     *                       specified, the result will contain orders for all warehouses.
     *                       'limit'		The limit to the number of records returned.
     *                       'createdAfter'		Shipping labels that became available after this date and time
     *                       will be included in the result. Must be in ISO-8601 date/time format.
     *                       'createdBefore'		Shipping labels that became available before this date and time
     *                       will be included in the result. Must be in ISO-8601 date/time format.
     *                       'nextToken'		Used for pagination when there are more ship labels than the
     *                       specified result size limit. The token value is returned in the previous API
     *                       call.
     *
     * @return GetShippingLabelListResponse
     */
    public function getShippingLabels(array $queries = []): GetShippingLabelListResponse
    {
        return $this->client->request('getShippingLabels', 'GET', 'vendor/directFulfillment/shipping/v1/shippingLabels',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Creates a shipping label for a purchase order and returns a transactionId for
     * reference.
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
     * @param SubmitShippingLabelsRequest $Model Creates a shipping label for a
     *                                           purchase order and returns a transactionId for reference.
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
     * @return SubmitShippingLabelsResponse
     */
    public function submitShippingLabelRequest(SubmitShippingLabelsRequest $Model): SubmitShippingLabelsResponse
    {
        return $this->client->request('submitShippingLabelRequest', 'POST', 'vendor/directFulfillment/shipping/v1/shippingLabels',
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Returns a shipping label for the purchaseOrderNumber that you specify.
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
     * @param $purchaseOrderNumber The purchase order number for which you want to
     * return the shipping label. It should be the same purchaseOrderNumber as received
     * in the order.
     *
     * @return GetShippingLabelResponse
     */
    public function getShippingLabel($purchaseOrderNumber): GetShippingLabelResponse
    {
        return $this->client->request('getShippingLabel', 'GET', "vendor/directFulfillment/shipping/v1/shippingLabels/{$purchaseOrderNumber}",
            [
            ]
        );
    }
}
