<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: CatalogProduct.proto

namespace GPBMetadata;

class CatalogProduct
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
CatalogProduct.protocatalog"
Request
jsonData (	"
Response
message (	"%
HealthCheckRequest
service (	"�
HealthCheckResponse:
status (2*.catalog.HealthCheckResponse.ServingStatus":
ServingStatus
UNKNOWN 
SERVING
NOT_SERVING2�
CatalogService1

GetCatalog.catalog.Request.catalog.ResponseB
Check.catalog.HealthCheckRequest.catalog.HealthCheckResponsebproto3'
        , true);

        static::$is_initialized = true;
    }
}

