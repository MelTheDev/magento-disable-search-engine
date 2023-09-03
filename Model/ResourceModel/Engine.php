<?php

namespace MelTheDev\DisableSearchEngine\Model\ResourceModel;

use Magento\CatalogSearch\Model\ResourceModel\EngineInterface;

class Engine implements EngineInterface
{
    /**
     * @inheritDoc
     */
    public function getAllowedVisibility()
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function allowAdvancedIndex()
    {
        return false;
    }

    /**
     * @inheritDoc
     */
    public function processAttributeValue($attribute, $value)
    {
        return $value;
    }

    /**
     * @inheritDoc
     */
    public function prepareEntityIndex($index, $separator = ' ')
    {
        return $index;
    }

    /**
     * Is engine available/not
     *
     * @return bool
     */
    public function isAvailable()
    {
        return true;
    }
}
