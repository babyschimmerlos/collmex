<?php

namespace MarcusJaschen\Collmex\Type;

/**
 * Collmex ShipmentOrdersGet Type
 *
 * @author   Marcus Jaschen <mail@marcusjaschen.de>
 * @author   René Galle <renegalle.webdevelopment@gmail.com>
 * @license  http://www.opensource.org/licenses/mit-license MIT License
 * @link     https://github.com/mjaschen/collmex
 *
 * @property $type_identifier
 * @property $delivery_id
 * @property $client_id
 * @property $customer_id
 * @property $shipment_handover_id
 * @property $shipment_type
 * @property $handover_required
 * @property $delivery_date_from
 * @property $delivery_date_to
 * @property $shipment_date
 */
class ShipmentOrdersGet extends AbstractType implements TypeInterface
{
    const SHIPMENT_HANDOVER_ID_UNIVERSAL_CSV = 1;
    const SHIPMENT_HANDOVER_ID_DHL_ONLINE_FRANKING = 2;
    const SHIPMENT_HANDOVER_ID_DHL_INTRASHIP = 3;
    const SHIPMENT_HANDOVER_ID_FULFILLMENT_SERVICE_PROVIDER = 4;
    const SHIPMENT_HANDOVER_ID_YOUR_GLS = 5;
    const SHIPMENT_HANDOVER_ID_HERMES = 6;
    const SHIPMENT_HANDOVER_ID_AMAZON_FBA = 7;
    const SHIPMENT_HANDOVER_ID_GERMAN_POST_INTERNET_STAMP = 8;
    const SHIPMENT_HANDOVER_ID_MY_DPD_BUSINESS = 9;
    const SHIPMENT_HANDOVER_ID_DHL_BUSINESS_CLIENT_PORTAL = 10;

    /**
     * @var array
     */
    protected $template = [
        'type_identifier'      => 'SHIPMENT_ORDERS_GET',
        'delivery_id'          => null,
        'client_id'            => null,
        'customer_id'          => null,
        'shipment_handover_id' => null,
        'shipment_type'        => null,
        'handover_required'    => null,
        'delivery_date_from'   => null,
        'delivery_date_to'     => null,
        'shipment_date'        => null,
    ];

    /**
     * Formally validates the type data in $data attribute.
     *
     * @return bool Validation success
     */
    public function validate(): bool
    {
        return true;
    }
}