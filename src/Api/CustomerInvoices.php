<?php

namespace Amz\VendorDirectFulfillmentShipping\Api;

use Amz\VendorDirectFulfillmentShipping\Model\GetCustomerInvoiceResponse as GetCustomerInvoiceResponse;
use Amz\VendorDirectFulfillmentShipping\Model\GetCustomerInvoicesResponse as GetCustomerInvoicesResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class CustomerInvoices extends AbstractAPI
{
    /**
     * Returns a list of customer invoices created during a time frame that you
     * specify. You define the  time frame using the createdAfter and createdBefore
     * parameters. You must use both of these parameters. The date range to search must
     * be no more than 7 days.
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
     *                       'limit'		The limit to the number of records returned
     *                       'createdAfter'		Orders that became available after this date and time will be
     *                       included in the result. Must be in ISO-8601 date/time format.
     *                       'createdBefore'		Orders that became available before this date and time will be
     *                       included in the result. Must be in ISO-8601 date/time format.
     *                       'nextToken'		Used for pagination when there are more orders than the specified
     *                       result size limit. The token value is returned in the previous API call.
     *
     * @return GetCustomerInvoicesResponse|GetCustomerInvoiceResponse
     */
    public function getCustomerInvoices(array $queries = [])
    {
        return $this->client->request('getCustomerInvoices', 'GET', 'vendor/directFulfillment/shipping/v1/customerInvoices',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Returns a customer invoice based on the purchaseOrderNumber that you specify.
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
     * @param $purchaseOrderNumber Purchase order number of the shipment for which to
     * return the invoice
     *
     * @return GetCustomerInvoiceResponse
     */
    public function getCustomerInvoice($purchaseOrderNumber): GetCustomerInvoiceResponse
    {
        return $this->client->request('getCustomerInvoice', 'GET', "vendor/directFulfillment/shipping/v1/customerInvoices/{$purchaseOrderNumber}",
            [
            ]
        );
    }
}
