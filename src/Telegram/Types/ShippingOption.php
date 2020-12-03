<?php

namespace skrtdev\Telegram;

use stdClass;
use skrtdev\Prototypes\simpleProto;

/**
 * This object represents one shipping option.
*/
class ShippingOption extends Type{

    use simpleProto;

    /** @var string Shipping option identifier */
    public string $id;

    /** @var string Option title */
    public string $title;

    /** @var stdClass List of price portions */
    public stdClass $prices;

    
}

?>
