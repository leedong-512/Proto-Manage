<?php

namespace Proto\Fulfillment;

use Fulfillment\HealthCheckRequest;
use Fulfillment\HealthCheckResponse;
use Fulfillment\Request;
use Fulfillment\Response;
use Grpc\MethodDescriptor;
use Grpc\ServerContext;
use Grpc\Status;

class GreeterStub
{
    public function GetFulfillment(
        Request $request,
        ServerContext $context
    ): ?Response {
        $context->setStatus(Status::unimplemented());
        return null;
    }

    public function GetConsignment(
        Request $request,
        ServerContext $context
    ): ?Response {
        $context->setStatus(Status::unimplemented());
        return null;
    }

    public function ConsignmentLogCreate(
        Request $request,
        ServerContext $context
    ): ?Response {
        $context->setStatus(Status::unimplemented());
        return null;
    }

    public function GetFulfillmentOrderId(
        Request $request,
        ServerContext $context
    ): ?Response {
        $context->setStatus(Status::unimplemented());
        return null;
    }

    public function ConsignmentSave(
        Request $request,
        ServerContext $context
    ): ?Response {
        $context->setStatus(Status::unimplemented());
        return null;
    }

    public function GetPackageInfo(
        Request $request,
        ServerContext $context
    ): ?Response {
        $context->setStatus(Status::unimplemented());
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
            '/fulfillment.FulfillmentService/GetFulfillment' => new MethodDescriptor(
                $this,
                'GetFulfillment',
                '\Fulfillment\Request',
                MethodDescriptor::UNARY_CALL
            ),
            '/fulfillment.FulfillmentService/GetConsignment' => new MethodDescriptor(
                $this,
                'GetConsignment',
                '\Fulfillment\Request',
                MethodDescriptor::UNARY_CALL
            ),
            '/fulfillment.FulfillmentService/ConsignmentLogCreate' => new MethodDescriptor(
                $this,
                'ConsignmentLogCreate',
                '\Fulfillment\Request',
                MethodDescriptor::UNARY_CALL
            ),
            '/fulfillment.FulfillmentService/GetFulfillmentOrderId' => new MethodDescriptor(
                $this,
                'GetFulfillmentOrderId',
                '\Fulfillment\Request',
                MethodDescriptor::UNARY_CALL
            ),
            '/fulfillment.FulfillmentService/ConsignmentSave' => new MethodDescriptor(
                $this,
                'ConsignmentSave',
                '\Fulfillment\Request',
                MethodDescriptor::UNARY_CALL
            ),
            '/fulfillment.FulfillmentService/GetPackageInfo' => new MethodDescriptor(
                $this,
                'GetPackageInfo',
                '\Fulfillment\Request',
                MethodDescriptor::UNARY_CALL
            ),
            '/fulfillment.FulfillmentService/Check' => new MethodDescriptor(
                $this,
                'Check',
                '\Fulfillment\HealthCheckRequest',
                MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
