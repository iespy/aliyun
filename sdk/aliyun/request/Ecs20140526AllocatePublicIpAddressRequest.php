<?php
/**
 * TOP API: ecs.aliyuncs.com.AllocatePublicIpAddress.2014-05-26 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-01 12:47:26
 */
class Ecs20140526AllocatePublicIpAddressRequest
{
	/** 
	 * 需要分配IP地址的实例ID
	 **/
	private $instanceId;
	
	private $apiParas = array();
	
	public function setInstanceId($instanceId)
	{
		$this->instanceId = $instanceId;
		$this->apiParas["InstanceId"] = $instanceId;
	}

	public function getInstanceId()
	{
		return $this->instanceId;
	}

	public function getApiMethodName()
	{
		return "ecs.aliyuncs.com.AllocatePublicIpAddress.2014-05-26";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->instanceId,"instanceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
