<?php

namespace Amz\VendorDirectFulfillmentShipping\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Tax registration details of the entity.
 */
class TaxRegistrationDetails extends AbstractModel
{
    /**
     * Tax registration type for the entity.
     *
     * @var string
     */
    public $taxRegistrationType = null;

    /**
     * Tax registration number for the party. For example, VAT ID.
     *
     * @var string
     */
    public $taxRegistrationNumber = null;

    /**
     * Address associated with the tax registration number.
     *
     * @var \Amz\VendorDirectFulfillmentShipping\Model\Address
     */
    public $taxRegistrationAddress = null;

    /**
     * Tax registration message that can be used for additional tax related details.
     *
     * @var string
     */
    public $taxRegistrationMessages = null;
}
