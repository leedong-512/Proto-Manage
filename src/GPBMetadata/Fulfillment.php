<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Fulfillment.proto

namespace GPBMetadata;

class Fulfillment
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
Fulfillment.protofulfillment"
Request
jsonData (	"
Response
message (	"%
HealthCheckRequest
service (	"�
HealthCheckResponse>
status (2..fulfillment.HealthCheckResponse.ServingStatus":
ServingStatus
UNKNOWN 
SERVING
NOT_SERVING2�
FulfillmentService=
GetFulfillment.fulfillment.Request.fulfillment.Response=
GetConsignment.fulfillment.Request.fulfillment.ResponseC
ConsignmentLogCreate.fulfillment.Request.fulfillment.ResponseD
GetFulfillmentOrderId.fulfillment.Request.fulfillment.Response>
ConsignmentSave.fulfillment.Request.fulfillment.Response=
GetPackageInfo.fulfillment.Request.fulfillment.ResponseJ
Check.fulfillment.HealthCheckRequest .fulfillment.HealthCheckResponsebproto3'
        , true);

        static::$is_initialized = true;
    }
}

