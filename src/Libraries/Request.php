<?php
namespace Raptor\Libraries;

class Request
{
	public $headers;

	public $query;

	public $sender;

    public $config;

    public $resource;

    public function __construct()
    {
    	// Load request configuration.
    	$this->config = load('config/request');
        // Fetch request headers.
        $this->headers = getallheaders();
        // Fetch the query string.
        $this->query = $_SERVER['QUERY_STRING'];
        // If the query string is empty.
    }
}