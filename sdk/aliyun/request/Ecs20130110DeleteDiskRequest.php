<?php
/**
 * TOP API: ecs.aliyuncs.com.DeleteDisk.2013-01-10 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-01 12:47:26
 */
class Ecs20130110DeleteDiskRequest
{
	/** 
	 * 需要删除的磁盘设备ID
	 **/
	private $diskId;
	
	/** 
	 * 磁盘所属的实例的ID
	 **/
	private $instanceId;
	
	private $apiParas = array();
	
	public function setDiskId($diskId)
	{
		$this->diskId = $diskId;
		$this->apiParas["DiskId"] = $diskId;
	}

	public function getDiskId()
	{
		return $this->diskId;
	}

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
		return "ecs.aliyuncs.com.DeleteDisk.2013-01-10";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->diskId,"diskId");
		RequestCheckUtil::checkNotNull($this->instanceId,"instanceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
