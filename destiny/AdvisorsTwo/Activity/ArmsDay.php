<?php

namespace Destiny\AdvisorsTwo\Activity;

use Destiny\AdvisorsTwo\Activity;
use Destiny\Definitions\InventoryItem;

/**
 * @property string $progressionHash
 * @property InventoryItem[] $weapons
 */
class ArmsDay extends Activity implements ActivityInterface, EventInterface
{
    public function __construct(array $items, array $properties)
    {
        if (isset($properties['extended']['orders'])) {
            $items = [];
            foreach ($properties['extended']['orders'] as $order) {
                $items[] = manifest()->inventoryItem($order['item']['itemHash']);
            }
            $properties['weapons'] = $items;
        }
        parent::__construct($properties);
    }

    public function getTitle()
    {
        return 'Arms Day';
    }

    /**
     * @return string
     */
    public static function getIdentifier()
    {
        return 'armsday';
    }

    public function isEventCancelled()
    {
        return false;
    }
}
