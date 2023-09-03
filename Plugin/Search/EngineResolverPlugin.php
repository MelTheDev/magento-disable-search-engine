<?php

namespace MelTheDev\DisableSearchEngine\Plugin\Search;

use Magento\Search\Model\EngineResolver;

class EngineResolverPlugin extends EngineResolver
{
    /** @var string */
    public const NAME_DISABLED_SEARCH = 'disabled-engine';

    /**
     * @param EngineResolver $subject
     * @param callable $proceed
     * @return string
     */
    public function aroundGetCurrentSearchEngine(EngineResolver $subject, callable $proceed): string
    {
        return self::NAME_DISABLED_SEARCH;
    }
}