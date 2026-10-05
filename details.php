<?php
@session_start();

require_once __DIR__ . '/sample-data.php';

$raw_site_url = getenv('SITE_URL');
if (!empty($raw_site_url)) {
    $site_url = rtrim($raw_site_url, '/') . '/';
} else {
    $site_url = '/';
}

$con = null;

ini_set('memory_limit', '-1');

function createThumbnail($src, $dest, $targetWidth, $targetHeight = null, $mobile = false)
{
    $IMAGE_HANDLERS = [
        IMAGETYPE_JPEG => [
            'load' => 'imagecreatefromjpeg',
            'save' => 'imagejpeg',
            'quality' => 100
        ],
        IMAGETYPE_PNG => [
            'load' => 'imagecreatefrompng',
            'save' => 'imagepng',
            'quality' => 0
        ],
        IMAGETYPE_WEBP => [
            'load' => 'imagecreatefromwebp',
            'save' => 'imagewebp',
            'quality' => 100
        ],
        IMAGETYPE_GIF => [
            'load' => 'imagecreatefromgif',
            'save' => 'imagegif',
            'quality' => 100
        ]
    ];

    if (!file_exists($src) || !function_exists('exif_imagetype')) {
        return null;
    }

    $type = @exif_imagetype($src);
    if (!$type || !isset($IMAGE_HANDLERS[$type])) {
        return null;
    }

    $image = @call_user_func($IMAGE_HANDLERS[$type]['load'], $src);
    if (!$image) {
        return null;
    }

    $width = imagesx($image);
    $height = imagesy($image);

    if ($targetHeight == null) {
        $ratio = $width / $height;
        if ($width > $height) {
            $targetHeight = floor($targetWidth / $ratio);
        } else {
            $targetHeight = $targetWidth;
            $targetWidth = floor($targetWidth * $ratio);
        }
    }

    if ($mobile) {
        $ratio = $width / $height;
        if ($width > $targetWidth) {
            if ($width > $height) {
                $targetHeight = floor($targetWidth / $ratio);
            } else {
                $targetHeight = $targetWidth;
                $targetWidth = floor($targetWidth * $ratio);
            }
        } else {
            $targetHeight = $height;
            $targetWidth = $width;
        }
    }

    $thumbnail = imagecreatetruecolor($targetWidth, $targetHeight);

    if ($type == IMAGETYPE_GIF || $type == IMAGETYPE_PNG) {
        imagecolortransparent($thumbnail, imagecolorallocate($thumbnail, 0, 0, 0));
        if ($type == IMAGETYPE_PNG) {
            imagealphablending($thumbnail, false);
            imagesavealpha($thumbnail, true);
        }
    }

    imagecopyresampled(
        $thumbnail,
        $image,
        0,
        0,
        0,
        0,
        $targetWidth,
        $targetHeight,
        $width,
        $height
    );

    return call_user_func(
        $IMAGE_HANDLERS[$type]['save'],
        $thumbnail,
        $dest,
        $IMAGE_HANDLERS[$type]['quality']
    );
}

// Populate website settings from sample-data.php
$businessname = $website['name'];
$address = $website['address'];
$address1 = $website['address1'];
$mobile = $website['mobile'];
$mobile1 = $website['mobile1'];
$email = $website['email'];
$email1 = $website['email1'];
$fb = $website['fb'];
$google = $website['google'];
$insta = $website['insta'];
$whatsapp = $website['whatsapp'];
$logo = $website['logo'];
$banner = $website['banner'];