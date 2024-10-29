<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Warehouse;

/**
 */
class WarehouseServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Warehouse\VerifyStockRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function verifyStock(\Warehouse\VerifyStockRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/warehouse.WarehouseService/verifyStock',
        $argument,
        ['\Warehouse\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Warehouse\WarehouseProductRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getWarehouseProduct(\Warehouse\WarehouseProductRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/warehouse.WarehouseService/getWarehouseProduct',
        $argument,
        ['\Warehouse\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Warehouse\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function updateStock(\Warehouse\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/warehouse.WarehouseService/updateStock',
        $argument,
        ['\Warehouse\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Warehouse\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function getWarehouse(\Warehouse\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/warehouse.WarehouseService/getWarehouse',
        $argument,
        ['\Warehouse\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Warehouse\HealthCheckRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Check(\Warehouse\HealthCheckRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/warehouse.WarehouseService/Check',
        $argument,
        ['\Warehouse\HealthCheckResponse', 'decode'],
        $metadata, $options);
    }

}
