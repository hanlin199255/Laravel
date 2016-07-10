<?php
	/**
	 * 设置加载自定义文件方式
	 * 1创建文件
	 * 2设置该文件在composer.json中的路径引入
	 * 3使用composer命令 composer dump-autoload引入文件
	 * @param unknown $stateId
	 * @return string
	 */
	function showState($stateId)
	{
		switch ($stateId)
		{
			case '1':
				return '注册用户';
				break;
			case '2':
				return '激活用户';
				break;
			default:
				return '用户异常';
				break;
		}
	}