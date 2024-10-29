<?php

namespace Proto\Catalog;

use Catalog\Request;
use Catalog\Response;

class GreeterStub
{
    public function GetCatalog(
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
            '/catalog.CatalogService/GetCatalog' => new \Grpc\MethodDescriptor(
                $this,
                'GetCatalog',
                '\Catalog\Request',
                \Grpc\MethodDescriptor::UNARY_CALL
            ),
        ];
    }

}
