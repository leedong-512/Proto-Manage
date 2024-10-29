<?php

namespace Proto\Warehouse;

use Grpc\MethodDescriptor;
use Grpc\ServerContext;
use Grpc\Status;
use Warehouse\Request;
use Warehouse\verifyStockRequest;
use Warehouse\Response;
use Warehouse\warehouseProductRequest;

class GreeterStub
{
    public function verifyStock(
        verifyStockRequest $request,
        ServerContext $context
    ): ?Response {
        $context->setStatus(Status::unimplemented());
        return null;
    }

    public function getWarehouseProduct(
        warehouseProductRequest $request,
        ServerContext $context
    ): ?Response {
        $context->setStatus(Status::unimplemented());
        return null;
    }

    public function updateStock(
        Request $request,
        ServerContext $context
    ): ?Response {
        $context->setStatus(Status::unimplemented());
        return null;
    }

    public function getWarehouse(
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
            '/warehouse.WarehouseService/verifyStock' => new MethodDescriptor(
                $this,
                'verifyStock',
                '\Warehouse\verifyStockRequest',
                MethodDescriptor::UNARY_CALL
            ),
            '/warehouse.WarehouseService/getWarehouseProduct' => new  MethodDescriptor(
                $this,
                'getWarehouseProduct',
                '\Warehouse\warehouseProductRequest',
                MethodDescriptor::UNARY_CALL
            ),
            '/warehouse.WarehouseService/updateStock' => new  MethodDescriptor(
                $this,
                'updateStock',
                '\Warehouse\Request',
                MethodDescriptor::UNARY_CALL
            ),
            '/warehouse.WarehouseService/getWarehouse' => new  MethodDescriptor(
                $this,
                'getWarehouse',
                '\Warehouse\Request',
                MethodDescriptor::UNARY_CALL
            )
        ];
    }

}
