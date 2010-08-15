<?php

define('PHPCACHE_ROOT', dirname(__FILE__).'/../../cache/');
require PHPCACHE_ROOT.'../tests/cache.php';

class MemcachedTest extends CacheTest
{
	public function __construct()
	{
		parent::__construct('memcached', array('host' => 'localhost', 'port' => 11211));
	}
}