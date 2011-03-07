<?php
class GlobalTools
{
	/**
	 * 创建目录
	 */
	public static function mkdirs($dir) {
   		return is_dir($dir) || (self::mkdirs(dirname($dir)) && mkdir($dir, 0777));
	}
	
    /**
     * 获取客户端IP地址
     * @return string 客户端IP地址
     */
    public static function getClientIp()
    {
        if ($_SERVER['HTTP_CLIENT_IP']) {
	      $ip = $_SERVER['HTTP_CLIENT_IP'];
	 	} elseif ($_SERVER['HTTP_X_FORWARDED_FOR']) {
	      $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	 	} else {
	      $ip = $_SERVER['REMOTE_ADDR'];
	 	}
        
        return $ip;
    }
}