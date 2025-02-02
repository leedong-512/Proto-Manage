<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Order;

/**
 */
class OrderServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Order\Request $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function uploadTracking(\Order\Request $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/order.OrderService/uploadTracking',
        $argument,
        ['\Order\Response', 'decode'],
        $metadata, $options);
    }

}
