# Search Engine Disable

Module will help disables search engine which always required by Magento such as ElasticSearch or OpenSearch.

This module might be helpful if scenarios like no need of search engine but fetches the data from somewhere else.
For example, If using Algolia and its being used everywhere then use of OpenSearch or ElasticSearch is not useful.

### Installation

#### Composer

```
composer require melthedev/magento-disable-search-engine
```

#### Run below magento commands once downloaded

```
bin/magento module:enable MelTheDev_DisableSearchEngine
bin/magento setup:upgrade && bin/magento setup:di:compile
```

### Bugs or Issues

If you found any issues, please create issue on this Github issue section.

### Credits

- [zepgram](https://github.com/zepgram/module-disable-search-engine)