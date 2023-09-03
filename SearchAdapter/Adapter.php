<?php

namespace MelTheDev\DisableSearchEngine\SearchAdapter;

use Magento\Framework\Search\AdapterInterface;
use Magento\Framework\Search\RequestInterface;
use Magento\Framework\Search\Response\AggregationFactory;
use Magento\Framework\Search\Response\BucketFactory;
use Magento\Framework\Search\Response\QueryResponse;
use Magento\Framework\Search\Response\QueryResponseFactory as ResponseFactory;

class Adapter implements AdapterInterface
{
    /**
     * @param ResponseFactory $responseFactory
     * @param AggregationFactory $aggregationFactory
     * @param BucketFactory $bucketFactory
     * @noinspection PhpPropertyCanBeReadonlyInspection
     */
    public function __construct(
        private ResponseFactory    $responseFactory,
        private AggregationFactory $aggregationFactory,
        private BucketFactory      $bucketFactory
    ) {
    }

    /**
     * Empty Query Response
     *
     * @param RequestInterface $request
     * @return QueryResponse
     */
    public function query(RequestInterface $request): QueryResponse
    {
        $values = $buckets = [];
        foreach ($request->getAggregation() as $aggregation) {
            $name = $aggregation->getName();
            $buckets[$name] = $this->bucketFactory->create([
                'name'   => $name,
                'values' => $values
            ]);
        }
        return $this->responseFactory->create(
            [
                'documents'    => [],
                'aggregations' => $this->aggregationFactory->create(['buckets' => $buckets]),
                'total'        => 0
            ]
        );
    }
}
