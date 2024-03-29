<?php
/**
 * TOP API: mts.aliyuncs.com.QueryTranscodeJobList.2014-06-18 request
 * 
 * @author auto create
 * @since 1.0, 2014-09-01 12:47:26
 */
class Mts20140618QueryTranscodeJobListRequest
{
	/** 
	 * 媒资ID
	 **/
	private $mediaId;
	
	private $apiParas = array();
	
	public function setMediaId($mediaId)
	{
		$this->mediaId = $mediaId;
		$this->apiParas["MediaId"] = $mediaId;
	}

	public function getMediaId()
	{
		return $this->mediaId;
	}

	public function getApiMethodName()
	{
		return "mts.aliyuncs.com.QueryTranscodeJobList.2014-06-18";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->mediaId,"mediaId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
