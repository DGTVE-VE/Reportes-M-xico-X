<?php
	/**
	 * Object represents table 'djcelery_taskstate'
	 *
     	 * @author: http://phpdao.com
     	 * @date: 2015-09-03 19:45	 
	 */
	class DjceleryTaskstate{
		
		var $id;
		var $state;
		var $taskId;
		var $name;
		var $tstamp;
		var $args;
		var $kwargs;
		var $eta;
		var $expires;
		var $result;
		var $traceback;
		var $runtime;
		var $retries;
		var $workerId;
		var $hidden;
		
	}
?>