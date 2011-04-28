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

	/**
	 * 返回文件上传路径
	 */
    public static function uploadPathName($pathName)
    {
        $pathName = $pathName.'/'. date('Y/m/d') .'/';
        $basePath = Yii::app()->params['attachmentsBasePath'] . $pathName;
        return array(
            'basePath' => $basePath,
            'pathName' => $pathName
        );
    }
    
    /**
	 * 返回上传文件名称
	 */
    public static function uploadFileName($extension)
    {
        return date('YmdHis').rand(1000,9999).'.'.$extension;
    }
    
}