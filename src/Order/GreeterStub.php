<?php

namespace Proto\Order;

use Order\Request;
use Order\Response;

class GreeterStub
{
    public function uploadTracking(
        Request $request,
        \Grpc\ServerContext $context
    ): ?Response {
        $context->setStatus(\Grpc\Status::unimplemented());
        return null;
    }

    /**
     * Get the method descriptors of the service for server registration
     *
     * @return array of \Grpc\MethodDescriptor for the service methods
     */
    public final function getMethodDescriptors(): array
    {
        return [
            '/order.OrderService/uploadTracking' => new \Grpc\MethodDescriptor(
                $this,
                'uploadTracking',
                '\Order\Request',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
