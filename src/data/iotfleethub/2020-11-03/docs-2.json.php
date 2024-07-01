<?php
// This file was auto-generated from sdk-root/src/data/iotfleethub/2020-11-03/docs-2.json
return [ 'version' => '2.0', 'service' => '<p>With Fleet Hub for IoT Device Management you can build stand-alone web applications for monitoring the health of your device fleets.</p>', 'operations' => [ 'CreateApplication' => '<p>Creates a Fleet Hub for IoT Device Management web application.</p> <p>When creating a Fleet Hub application, you must create an organization instance of IAM Identity Center if you don\'t already have one. The Fleet Hub application you create must also be in the same Amazon Web Services Region of the organization instance of IAM Identity Center. For more information see <a href="https://docs.aws.amazon.com/singlesignon/latest/userguide/get-set-up-for-idc.html">Enabling IAM Identity Center</a> and <a href="https://docs.aws.amazon.com/singlesignon/latest/userguide/organization-instances-identity-center.html">Organization instances of IAM Identity Center</a>.</p>', 'DeleteApplication' => '<p>Deletes a Fleet Hub for IoT Device Management web application.</p>', 'DescribeApplication' => '<p>Gets information about a Fleet Hub for IoT Device Management web application.</p>', 'ListApplications' => '<p>Gets a list of Fleet Hub for IoT Device Management web applications for the current account.</p>', 'ListTagsForResource' => '<p>Lists the tags for the specified resource.</p>', 'TagResource' => '<p>Adds to or modifies the tags of the specified resource. Tags are metadata which can be used to manage a resource.</p>', 'UntagResource' => '<p>Removes the specified tags (metadata) from the resource.</p>', 'UpdateApplication' => '<p>Updates information about a Fleet Hub for IoT Device Management web application.</p>', ], 'shapes' => [ 'ApplicationState' => [ 'base' => NULL, 'refs' => [ 'ApplicationSummary$applicationState' => '<p>The current state of the web application.</p>', 'DescribeApplicationResponse$applicationState' => '<p>The current state of the web application.</p>', ], ], 'ApplicationSummaries' => [ 'base' => NULL, 'refs' => [ 'ListApplicationsResponse$applicationSummaries' => '<p>An array of objects that provide summaries of information about the web applications in the list.</p>', ], ], 'ApplicationSummary' => [ 'base' => '<p>A summary of information about a Fleet Hub for IoT Device Management web application.</p>', 'refs' => [ 'ApplicationSummaries$member' => NULL, ], ], 'Arn' => [ 'base' => NULL, 'refs' => [ 'CreateApplicationRequest$roleArn' => '<p>The ARN of the role that the web application assumes when it interacts with Amazon Web Services IoT Core.</p> <note> <p>The name of the role must be in the form <code>AWSIotFleetHub_<i>random_string</i> </code>.</p> </note>', 'CreateApplicationResponse$applicationArn' => '<p>The ARN of the web application.</p>', 'DescribeApplicationResponse$applicationArn' => '<p>The ARN of the web application.</p>', 'DescribeApplicationResponse$roleArn' => '<p>The ARN of the role that the web application assumes when it interacts with Amazon Web Services IoT Core.</p>', ], ], 'ClientRequestToken' => [ 'base' => NULL, 'refs' => [ 'CreateApplicationRequest$clientToken' => '<p>A unique case-sensitive identifier that you can provide to ensure the idempotency of the request. Don\'t reuse this client token if a new idempotent request is required.</p>', 'DeleteApplicationRequest$clientToken' => '<p>A unique case-sensitive identifier that you can provide to ensure the idempotency of the request. Don\'t reuse this client token if a new idempotent request is required.</p>', 'UpdateApplicationRequest$clientToken' => '<p>A unique case-sensitive identifier that you can provide to ensure the idempotency of the request. Don\'t reuse this client token if a new idempotent request is required.</p>', ], ], 'ConflictException' => [ 'base' => '<p>The request conflicts with the current state of the resource.</p>', 'refs' => [], ], 'CreateApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'CreateApplicationResponse' => [ 'base' => NULL, 'refs' => [], ], 'DeleteApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'DeleteApplicationResponse' => [ 'base' => NULL, 'refs' => [], ], 'DescribeApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'DescribeApplicationResponse' => [ 'base' => NULL, 'refs' => [], ], 'Description' => [ 'base' => NULL, 'refs' => [ 'ApplicationSummary$applicationDescription' => '<p>An optional description of the web application.</p>', 'CreateApplicationRequest$applicationDescription' => '<p>An optional description of the web application.</p>', 'DescribeApplicationResponse$applicationDescription' => '<p>An optional description of the web application.</p>', 'UpdateApplicationRequest$applicationDescription' => '<p>An optional description of the web application.</p>', ], ], 'ErrorMessage' => [ 'base' => NULL, 'refs' => [ 'DescribeApplicationResponse$errorMessage' => '<p>A message that explains any failures included in the <code>applicationState</code> response field. This message explains failures in the <code>CreateApplication</code> and <code>DeleteApplication</code> actions.</p>', ], ], 'Id' => [ 'base' => NULL, 'refs' => [ 'ApplicationSummary$applicationId' => '<p>The unique Id of the web application.</p>', 'CreateApplicationResponse$applicationId' => '<p>The unique Id of the web application.</p>', 'DeleteApplicationRequest$applicationId' => '<p>The unique Id of the web application.</p>', 'DescribeApplicationRequest$applicationId' => '<p>The unique Id of the web application.</p>', 'DescribeApplicationResponse$applicationId' => '<p>The unique Id of the web application.</p>', 'UpdateApplicationRequest$applicationId' => '<p>The unique Id of the web application.</p>', ], ], 'InternalFailureException' => [ 'base' => '<p>An unexpected error has occurred.</p>', 'refs' => [], ], 'InvalidRequestException' => [ 'base' => '<p>The request is not valid.</p>', 'refs' => [], ], 'LimitExceededException' => [ 'base' => '<p>A limit has been exceeded.</p>', 'refs' => [], ], 'ListApplicationsRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListApplicationsResponse' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'ListTagsForResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'Name' => [ 'base' => NULL, 'refs' => [ 'ApplicationSummary$applicationName' => '<p>The name of the web application.</p>', 'CreateApplicationRequest$applicationName' => '<p>The name of the web application.</p>', 'DescribeApplicationResponse$applicationName' => '<p>The name of the web application.</p>', 'UpdateApplicationRequest$applicationName' => '<p>The name of the web application.</p>', ], ], 'NextToken' => [ 'base' => NULL, 'refs' => [ 'ListApplicationsRequest$nextToken' => '<p>A token used to get the next set of results.</p>', 'ListApplicationsResponse$nextToken' => '<p>A token used to get the next set of results.</p>', ], ], 'ResourceArn' => [ 'base' => NULL, 'refs' => [ 'ListTagsForResourceRequest$resourceArn' => '<p>The ARN of the resource.</p>', 'TagResourceRequest$resourceArn' => '<p>The ARN of the resource.</p>', 'UntagResourceRequest$resourceArn' => '<p>The ARN of the resource.</p>', ], ], 'ResourceNotFoundException' => [ 'base' => '<p>The specified resource does not exist.</p>', 'refs' => [], ], 'SsoClientId' => [ 'base' => NULL, 'refs' => [ 'DescribeApplicationResponse$ssoClientId' => '<p>The Id of the single sign-on client that you use to authenticate and authorize users on the web application.</p>', ], ], 'TagKey' => [ 'base' => NULL, 'refs' => [ 'TagKeyList$member' => NULL, 'TagMap$key' => NULL, ], ], 'TagKeyList' => [ 'base' => NULL, 'refs' => [ 'UntagResourceRequest$tagKeys' => '<p>A list of the keys of the tags to be removed from the resource.</p>', ], ], 'TagMap' => [ 'base' => NULL, 'refs' => [ 'CreateApplicationRequest$tags' => '<p>A set of key/value pairs that you can use to manage the web application resource.</p>', 'DescribeApplicationResponse$tags' => '<p>A set of key/value pairs that you can use to manage the web application resource.</p>', 'ListTagsForResourceResponse$tags' => '<p>The list of tags assigned to the resource.</p>', 'TagResourceRequest$tags' => '<p>The new or modified tags for the resource.</p>', ], ], 'TagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'TagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'TagValue' => [ 'base' => NULL, 'refs' => [ 'TagMap$value' => NULL, ], ], 'ThrottlingException' => [ 'base' => '<p>The rate exceeds the limit.</p>', 'refs' => [], ], 'Timestamp' => [ 'base' => NULL, 'refs' => [ 'ApplicationSummary$applicationCreationDate' => '<p>The date (in Unix epoch time) when the web application was created.</p>', 'ApplicationSummary$applicationLastUpdateDate' => '<p>The date (in Unix epoch time) when the web application was last updated.</p>', 'DescribeApplicationResponse$applicationCreationDate' => '<p>The date (in Unix epoch time) when the application was created.</p>', 'DescribeApplicationResponse$applicationLastUpdateDate' => '<p>The date (in Unix epoch time) when the application was last updated.</p>', ], ], 'UntagResourceRequest' => [ 'base' => NULL, 'refs' => [], ], 'UntagResourceResponse' => [ 'base' => NULL, 'refs' => [], ], 'UpdateApplicationRequest' => [ 'base' => NULL, 'refs' => [], ], 'UpdateApplicationResponse' => [ 'base' => NULL, 'refs' => [], ], 'Url' => [ 'base' => NULL, 'refs' => [ 'ApplicationSummary$applicationUrl' => '<p>The URL of the web application.</p>', 'DescribeApplicationResponse$applicationUrl' => '<p>The URL of the web application.</p>', ], ], 'errorMessage' => [ 'base' => NULL, 'refs' => [ 'ConflictException$message' => NULL, 'InternalFailureException$message' => NULL, 'InvalidRequestException$message' => NULL, 'LimitExceededException$message' => NULL, 'ResourceNotFoundException$message' => NULL, 'ThrottlingException$message' => NULL, ], ], ],];
