<?php
class PageSettings {
	private string $title = SITE_NAME;
	private bool $header = false;
	private bool $footer = false;
	private array $authorizations = [];

	public function __construct(){}

	public function getTitle(){
		return $this->title;
	}

	public function hasHeader(){
		return $this->header;
	}

	public function hasFooter(){
		return $this->footer;
	}

	public function getAuthorizations(){
		return $this->authorizations;
	}

	public function setTitle(string $title){
		$this->title = $title." - ".SITE_NAME;
		return $this;
	}

	public function addHeader(){
		$this->header = true;
		return $this;
	}

	public function addFooter(){
		$this->footer = true;
		return $this;
	}

	public function addAuthorization(string ...$names){
		$this->authorizations = array_merge($this->authorizations, $names);
		return $this;
	}
}