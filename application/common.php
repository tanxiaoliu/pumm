<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;
const WATER_SOUTH = 8; //常量，标识下居中水印
const REWARD_URL = "http://laoit.top/打赏/dashang.html";


/**
 * 使用高斯算法实现图片的模糊处理
 * @author tanhuaxin
 * @param $srcImg
 * @param null $savePath
 * @param null $saveName
 * @param int $blurFactor
 * @return string
 */
function gaussianBlur($srcImg, $savePath = null, $saveName = null, $blurFactor = 3)
{
    $info = getimagesize($srcImg);
    switch ($info[2]) {
        case 1:
            $gdImageResource = imagecreatefromgif($srcImg);
            break;
        case 2:
            $gdImageResource = imagecreatefromjpeg($srcImg);
            break;
        case 3:
            $gdImageResource = imagecreatefrompng($srcImg);
            break;
        default:
            $gdImageResource = null;
    }

    $srcImgObj = blur($gdImageResource, $blurFactor);
    $temp = pathinfo($srcImg);
    $name = $temp['basename'];
    $path = $temp['dirname'];
    $saveName = $saveName ? $saveName : $name;
    $savePath = $savePath ? $savePath : $path;
    $saveFile = $savePath . '/' . $saveName;
    $srcInfo = @getimagesize($srcImg);
    switch ($srcInfo[2]) {
        case 1:
            imagegif($srcImgObj, $saveFile);
            break;
        case 2:
            imagejpeg($srcImgObj, $saveFile);
            break;
        case 3:
            imagepng($srcImgObj, $saveFile);
            break;
        default:
            return '保存失败';
    }
    return $saveFile;
}

/**
 * 模糊处理
 * @author tanhuaxin
 * @param $gdImageResource
 * @param int $blurFactor 可选择的模糊程度 0使用   3默认   超过5时 极其模糊
 * @return mixed
 */
function blur($gdImageResource, $blurFactor = 3)
{
    // blurFactor has to be an integer
    $blurFactor = round($blurFactor);

    $originalWidth = imagesx($gdImageResource);
    $originalHeight = imagesy($gdImageResource);

    $smallestWidth = ceil($originalWidth * pow(0.5, $blurFactor));
    $smallestHeight = ceil($originalHeight * pow(0.5, $blurFactor));

    // for the first run, the previous image is the original input
    $prevImage = $gdImageResource;
    $prevWidth = $originalWidth;
    $prevHeight = $originalHeight;

    // scale way down and gradually scale back up, blurring all the way
    for ($i = 0; $i < $blurFactor; $i += 1) {
        // determine dimensions of next image
        $nextWidth = $smallestWidth * pow(2, $i);
        $nextHeight = $smallestHeight * pow(2, $i);

        // resize previous image to next size
        $nextImage = imagecreatetruecolor($nextWidth, $nextHeight);
        imagecopyresized($nextImage, $prevImage, 0, 0, 0, 0,
            $nextWidth, $nextHeight, $prevWidth, $prevHeight);

        // apply blur filter
        imagefilter($nextImage, IMG_FILTER_GAUSSIAN_BLUR);

        // now the new image becomes the previous image for the next step
        $prevImage = $nextImage;
        $prevWidth = $nextWidth;
        $prevHeight = $nextHeight;
    }

    // scale back to original size and blur one more time
    imagecopyresized($gdImageResource, $nextImage,
        0, 0, 0, 0, $originalWidth, $originalHeight, $nextWidth, $nextHeight);
    imagefilter($gdImageResource, IMG_FILTER_GAUSSIAN_BLUR);

    // clean up
    imagedestroy($prevImage);

    // return result
    return $gdImageResource;
}

/**
 * 下载图片保存到本地
 * @author tanhuaxin
 * @param $url
 * @param string $path
 */
function downloadImage($url, $path)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    $file = curl_exec($ch);
    curl_close($ch);

    $resource = fopen($path, 'a');
    fwrite($resource, $file);
    fclose($resource);
}


/**
 * 创建二维码
 * @param $data
 * @param $fileName
 * @return string
 */
function createQrCode($data, $fileName)
{
    vendor("phpqrcode.phpqrcode");
    $url = REWARD_URL . $data;
    // 纠错级别：L、M、Q、H
    $level = 'L';
    // 点的大小：1到10,用于手机端4就可以了
    $size = 4;
    \QRcode::png($url, $fileName, $level, $size);
    return $fileName;
}

/**
 * 七牛上传
 * @param $key
 * @param $filePath
 * @return array
 */
function qiNiuUpload($key, $filePath)
{
    vendor("qiniu.autoload");
    $accessKey = config('qiniu.access_key');
    $secretKey = config('qiniu.secret_key');
    $auth = new Auth($accessKey, $secretKey);
    $bucket = config('qiniu.bucket');
    // 生成上传Token
    $token = $auth->uploadToken($bucket);
    // 构建 UploadManager 对象
    $uploadMgr = new UploadManager();
    return $uploadMgr->putFile($token, $key, $filePath);
}
