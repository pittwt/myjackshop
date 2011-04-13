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
        if (getenv('HTTP_CLIENT_IP')) {
	      $ip = getenv('HTTP_CLIENT_IP');
	 	} elseif (getenv('HTTP_X_FORWARDED_FOR')) {
	      $ip =getenv('HTTP_X_FORWARDED_FOR');
	 	} else {
	      $ip = getenv('REMOTE_ADDR');
	 	}
        
        return $ip;
    }
}