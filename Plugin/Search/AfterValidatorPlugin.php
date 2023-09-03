<?php

namespace MelTheDev\DisableSearchEngine\Plugin\Search;

use Magento\Search\Model\SearchEngine\Validator;

class AfterValidatorPlugin
{
    /**
     * @param Validator $subject
     * @param array $result
     * @return array
     */
    public function afterValidate(Validator $subject, array $result)
    {
        $result = []; //remove validation on magento setup upgrade
        return $result;
    }
}