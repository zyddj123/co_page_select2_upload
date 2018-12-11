<?php
//非法访问
if (!defined('BASECHECK')){
	header("HTTP/1.1 404 Not Found");
	header("Status: 404 Not Found");
	exit;
}
/**
 * 应用数据库配置
 *
 * @package		comnide
 * @author			B.I.T
 * @copyright		Copyright (c) 2016 - 2017.
 * @license
 * @link
 * @since				Version 1.17
 */
/* ------------------------------------------------------------------------------------------------------------------------------------------------------------------
 * 应用数据库配置
 * 可配置多个数据库连接实例。系统默认连接配置是“default”。
 * 数据库配置参数说明： 
 * type：数据库类型。系统现在支持mysql。
 * host：数据库连接地址。
 * port：数据库端口
 * user：数据库用户
 * password：数据库密码
 * charset：数据库字符集
 * db_name：数据库连接实例
 * log_type : 数据库日志方式。1:只记录错误信息; 2:记录全部
 * log_path : 数据库日志存放路径
 * ------------------------------------------------------------------------------------------------------------------------------------------------------------------*/
$db_config['default'] = array(
		'type' => 'mysqli',
		'host' => 'localhost',
		'port' => '3306',
		'user' => 'root',
		'password' => 'root',
		'charset' => 'utf8',
		'db_name' => 'co_page_select2',
		'log_type' => '2',
		'log_path' => APP_LOG_PATH.'/db'
);
?>