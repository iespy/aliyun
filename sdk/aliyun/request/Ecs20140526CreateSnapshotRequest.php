<?php
/**
 * TOP API: ecs.aliyuncs.com.CreateSnapshot.2014-05-26 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-01 12:47:26
 */
class Ecs20140526CreateSnapshotRequest
{
	/** 
	 * 用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大不值过64个ASCII字符。 具体参见附录：如何保证幂等性。
	 **/
	private $clientToken;
	
	/** 
	 * 快照的描述， [0,256]英文或中文字符，且不能以auto开头。快照的描述会显示在控制台中。不填则为空，默认为空。不能以http://和https://开头
	 **/
	private $description;
	
	/** 
	 * 指定的磁盘ID
	 **/
	private $diskId;
	
	/** 
	 * 快照的显示名称，由字母、数字、"-"组成，长度取值范围为[0,300]
	 **/
	private $snapshotName;
	
	private $apiParas = array();
	
	public function setClientToken($clientToken)
	{
		$this->clientToken = $clientToken;
		$this->apiParas["ClientToken"] = $clientToken;
	}

	public function getClientToken()
	{
		return $this->clientToken;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		$this->apiParas["Description"] = $description;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function setDiskId($diskId)
	{
		$this->diskId = $diskId;
		$this->apiParas["DiskId"] = $diskId;
	}

	public function getDiskId()
	{
		return $this->diskId;
	}

	public function setSnapshotName($snapshotName)
	{
		$this->snapshotName = $snapshotName;
		$this->apiParas["SnapshotName"] = $snapshotName;
	}

	public function getSnapshotName()
	{
		return $this->snapshotName;
	}

	public function getApiMethodName()
	{
		return "ecs.aliyuncs.com.CreateSnapshot.2014-05-26";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->diskId,"diskId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
