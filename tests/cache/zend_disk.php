<?php

define('PHPCACHE_ROOT', dirname(__FILE__).'/../../cache/');
require PHPCACHE_ROOT.'../tests/cache.php';

class Zend_DiskTest extends CacheTest
{
	public function __construct()
	{
		parent::__construct('zend_disk');
	}
}
