<?php
namespace SCW;

class Skin {
	private $thumbSrc;
	private $title;
	private $downloadUrl;
	private $marketUrl;
	
	public function __construct($thumbSrc, $title, $downloadUrl, $marketUrl) {
		$this->downloadUrl = $downloadUrl;
		$this->thumbSrc = $thumbSrc;
		$this->title = $title;
		$this->marketUrl = $marketUrl;
	}
	
	public function getThumbSrc() {
		return $this->thumbSrc;
	}
	
	public function getTitle() {
		return $this->title;
	}
	
	public function getDownloadUrl() {
		return $this->downloadUrl;
	}
	
	public function getMarketUrl() {
		return $this->marketUrl;
	}
	
}