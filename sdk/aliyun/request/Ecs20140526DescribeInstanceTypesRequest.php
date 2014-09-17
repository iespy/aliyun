<?php
/**
 * TOP API: ecs.aliyuncs.com.DescribeInstanceTypes.2014-05-26 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-01 12:47:26
 */
class Ecs20140526DescribeInstanceTypesRequest
{
	
	private $apiParas = array();
	
	public function getApiMethodName()
	{
		return "ecs.aliyuncs.com.DescribeInstanceTypes.2014-05-26";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
