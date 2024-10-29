<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Fulfillment;

/**
 */
class FulfillmentServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Fulfillment\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetFulfillment(\Fulfillment\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fulfillment.FulfillmentService/GetFulfillment',
        $argument,
        ['\Fulfillment\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Fulfillment\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetConsignment(\Fulfillment\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fulfillment.FulfillmentService/GetConsignment',
        $argument,
        ['\Fulfillment\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Fulfillment\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConsignmentLogCreate(\Fulfillment\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fulfillment.FulfillmentService/ConsignmentLogCreate',
        $argument,
        ['\Fulfillment\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Fulfillment\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetFulfillmentOrderId(\Fulfillment\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fulfillment.FulfillmentService/GetFulfillmentOrderId',
        $argument,
        ['\Fulfillment\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Fulfillment\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ConsignmentSave(\Fulfillment\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fulfillment.FulfillmentService/ConsignmentSave',
        $argument,
        ['\Fulfillment\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Fulfillment\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPackageInfo(\Fulfillment\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fulfillment.FulfillmentService/GetPackageInfo',
        $argument,
        ['\Fulfillment\Response', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Fulfillment\HealthCheckRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Check(\Fulfillment\HealthCheckRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/fulfillment.FulfillmentService/Check',
        $argument,
        ['\Fulfillment\HealthCheckResponse', 'decode'],
        $metadata, $options);
    }

}
