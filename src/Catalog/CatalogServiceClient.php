<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Catalog;

/**
 */
class CatalogServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Catalog\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCatalog(\Catalog\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.CatalogService/GetCatalog',
        $argument,
        ['\Catalog\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Catalog\HealthCheckRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Check(\Catalog\HealthCheckRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/catalog.CatalogService/Check',
        $argument,
        ['\Catalog\HealthCheckResponse', 'decode'],
        $metadata, $options);
    }

}
