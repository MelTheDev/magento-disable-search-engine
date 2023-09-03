<?php

namespace MelTheDev\DisableSearchEngine\Model\Indexer;

use Magento\Framework\Indexer\SaveHandler\IndexerInterface;

/**
 * Class used for not to use the indexers for search fulltext
 */
class Handler implements IndexerInterface
{
    /**
     * @inheritDoc
     */
    public function saveIndex($dimensions, \Traversable $documents)
    {
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function deleteIndex($dimensions, \Traversable $documents)
    {
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function cleanIndex($dimensions)
    {
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function isAvailable($dimensions = [])
    {
        return true;
    }
}
