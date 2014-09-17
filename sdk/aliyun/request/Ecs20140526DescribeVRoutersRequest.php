<?php
/**
 * TOP API: ecs.aliyuncs.com.DescribeVRouters.2014-05-26 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-01 12:47:26
 */
class Ecs20140526DescribeVRoutersRequest
{
	/** 
	 * 实例状态列表的页码，起始值为1，默认值为1<br /> 支持最小值为：1
	 **/
	private $pageNumber;
	
	/** 
	 * 分页查询时设置的每页行数，最大值50行，默认为10<br /> 支持最大值为：50
	 **/
	private $pageSize;
	
	/** 
	 * 实例所属于的Region ID
	 **/
	private $regionId;
	
	/** 
	 * 路由Id
	 **/
	private $vRouterId;
	
	private $apiParas = array();
	
	public function setPageNumber($pageNumber)
	{
		$this->pageNumber = $pageNumber;
		$this->apiParas["PageNumber"] = $pageNumber;
	}

	public function getPageNumber()
	{
		return $this->pageNumber;
	}

	public function setPageSize($pageSize)
	{
		$this->pageSize = $pageSize;
		$this->apiParas["PageSize"] = $pageSize;
	}

	public function getPageSize()
	{
		return $this->pageSize;
	}

	public function setRegionId($regionId)
	{
		$this->regionId = $regionId;
		$this->apiParas["RegionId"] = $regionId;
	}

	public function getRegionId()
	{
		return $this->regionId;
	}

	public function setvRouterId($vRouterId)
	{
		$this->vRouterId = $vRouterId;
		$this->apiParas["VRouterId"] = $vRouterId;
	}

	public function getvRouterId()
	{
		return $this->vRouterId;
	}

	public function getApiMethodName()
	{
		return "ecs.aliyuncs.com.DescribeVRouters.2014-05-26";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkMinValue($this->pageNumber,1,"pageNumber");
		RequestCheckUtil::checkMaxValue($this->pageSize,50,"pageSize");
		RequestCheckUtil::checkNotNull($this->regionId,"regionId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
