<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

/**
 * App\Util
 *
 * @mixin \Eloquent
 */
class Util extends Model
{
    public static function saveFile($file, $type)
    {
        $today = date("Y-m-d_H-i-s");
        $folderFile = date("Y-m");
        $file_name = 'web-' . $today . '-' . static::builtSlug($file->getClientOriginalName());
        if ($type == '') {
            $destinationPath = 'uploads/images/';
        } else if ($type == "file") {
            $destinationPath = 'uploads/files/';
        } else if ($type == "video") {
            $destinationPath = 'uploads/videos/' ;
        } else if ($type == "audio") {
            $destinationPath = 'uploads/audios/' ;
        }
        else{
            $destinationPath = 'uploads/orders/';
        }
        $destinationPath = $destinationPath.$folderFile;
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, TRUE);
        }
        $file->move($destinationPath, $file_name);
        $urlScr = '/'.$destinationPath . '/' . $file_name;
        return $urlScr;
    }

    public static function stripUnicode($str)
    {
        if (!$str) return false;
        $unicode = array(
            'a' => 'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
            'A' => 'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd' => 'đ',
            'D' => 'Đ',
            'e' => 'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
            'E' => 'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i' => 'í|ì|ỉ|ĩ|ị',
            'I' => 'Í|Ì|Ỉ|Ĩ|Ị',
            'o' => 'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
            'O' => 'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u' => 'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
            'U' => 'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y' => 'ý|ỳ|ỷ|ỹ|ỵ',
            'Y' => 'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
        );
        foreach ($unicode as $khongdau => $codau) {
            $arr = explode("|", $codau);
            $str = str_replace($arr, $khongdau, $str);
        }
        return $str;
    }

    public static function builtSlug($str)
    {
        $today = date("Y-m-d_H-i-s");
        $str = trim($str);
        if ($str == "") return "post".$today;
        $str = str_replace('"', '', $str);
        $str = str_replace("'", '', $str);
        $str = static::stripUnicode($str);
        $str = mb_convert_case($str, MB_CASE_LOWER, 'utf-8');
        $str = str_replace(' ', '-', $str);
        return $str;
    }

    public static function mail_utf8($to, $from_user, $from_email, $subject = '(No subject)', $message = '')
    {
        $from_user = "=?UTF-8?B?" . base64_encode($from_user) . "?=";
        $subject = "=?UTF-8?B?" . base64_encode($subject) . "?=";
        $headers = "From: $from_user <$from_email>\r\n" .
            "MIME-Version: 1.0" . "\r\n" .
            "Content-type: text/html; charset=UTF-8" . "\r\n";
        return mail($to, $subject, $message, $headers);
    }

    public static function RandomKey()
    {
        $s = "";

        $m = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "a", "b", "c", "d", "e", "f", "g", "h", "i", "j");

        for ($i = 1; $i <= 11; $i++) {
            $r = rand(0, count($m) - 1);
            $s = $s . $m[$r];
        }

        return $s;
    }

    public static function cate_parent($data, $parent = 0, $str = " ", $select = '0', $disableCate = " ")
    {
        foreach ($data as $val) {
            $id = $val->id;
            $name = $val->name;

            if ($val->id_parent == $parent) {
                if ($select != 0 && $id == $select) {
                    echo "<option value='$id' selected>$str $name</option>";
                } else if ($disableCate != " " && $id == $disableCate) {
                    echo "<option value='$id' disabled>$str $name</option>";
                } else {
                    echo "<option value='$id'>$str $name</option>";
                }
                cate_parent($data, $id, $str . "-", $select, $disableCate);
            }
        }

    }

    public static function AvataUser($file, $destination, $overlay = 'images/watermark.png', $X = 0, $Y = 0)
    {
        $watermark = imagecreatefrompng($overlay);
        $source = getimagesize($file);
        $source_mime = $source['mime'];
        $source_x = $source[0];
        $source_y = $source[1];
        if ($source_mime == "image/png") {
            $image = imagecreatefrompng($file);
        } else if ($source_mime == "image/jpeg") {
            $image = imagecreatefromjpeg($file);
        } else if ($source_mime == "image/gif") {
            $image = imagecreatefromgif($file);
        }
        $thumb_width = 500;
        $thumb_height = 500;

        $width = imagesx($image);
        $height = imagesy($image);

        $original_aspect = $width / $height;
        $thumb_aspect = $thumb_width / $thumb_height;

        if ($original_aspect >= $thumb_aspect) {
            // If image is wider than thumbnail (in aspect ratio sense)
            $new_height = $thumb_height;
            $new_width = $width / ($height / $thumb_height);
        } else {
            // If the thumbnail is wider than the image
            $new_width = $thumb_width;
            $new_height = $height / ($width / $thumb_width);
        }

        $thumb = imagecreatetruecolor($thumb_width, $thumb_height);

// Resize and crop
        imagecopyresampled($thumb,
            $image,
            0 - ($new_width - $thumb_width) / 2, // Center the image horizontally
            0 - ($new_height - $thumb_height) / 2, // Center the image vertically
            0, 0,
            $new_width, $new_height,
            $width, $height);
//	imagecopy($thumb, $watermark, 500 - 223, 300 - 25, 0, 0, imagesx($watermark), imagesy($watermark));
        imagepng($thumb, $destination);
        imagedestroy($thumb);
        return $destination;
    }

    public static function resizeDrop($file, $destination)
    {
//        $watermark =    imagecreatefrompng($overlay);
        $source = getimagesize($file);
        $source_mime = $source['mime'];
        $source_x = $source[0];
        $source_y = $source[1];
        if ($source_mime == "image/png") {
            $image = imagecreatefrompng($file);
        } else if ($source_mime == "image/jpeg") {
            $image = imagecreatefromjpeg($file);
        } else if ($source_mime == "image/gif") {
            $image = imagecreatefromgif($file);
        }
        $thumb_width = 480;
        $thumb_height = 606;

        $width = imagesx($image);
        $height = imagesy($image);

        $original_aspect = $width / $height;
        $thumb_aspect = $thumb_width / $thumb_height;

        if ($original_aspect >= $thumb_aspect) {
            // If image is wider than thumbnail (in aspect ratio sense)
            $new_height = $thumb_height;
            $new_width = $width / ($height / $thumb_height);
        } else {
            // If the thumbnail is wider than the image
            $new_width = $thumb_width;
            $new_height = $height / ($width / $thumb_width);
        }

        $thumb = imagecreatetruecolor($thumb_width, $thumb_height);

// Resize and crop
        imagecopyresampled($thumb,
            $image,
            0 - ($new_width - $thumb_width) / 2, // Center the image horizontally
            0 - ($new_height - $thumb_height) / 2, // Center the image vertically
            0, 0,
            $new_width, $new_height,
            $width, $height);
        imagepng($thumb, $destination);
        imagedestroy($thumb);
        return $destination;
    }

    public static function watermark_image($file, $destination, $overlay = 'images/watermark.png', $X = 0, $Y = 0)
    {
        $watermark = imagecreatefrompng($overlay);
        $source = getimagesize($file);
        $source_mime = $source['mime'];
        $source_x = $source[0];
        $source_y = $source[1];
        if ($source_mime == "image/png") {
            $image = imagecreatefrompng($file);
        } else if ($source_mime == "image/jpeg") {
            $image = imagecreatefromjpeg($file);
        } else if ($source_mime == "image/gif") {
            $image = imagecreatefromgif($file);
        }
        $thumb_width = 500;
        $thumb_height = 300;

        $width = imagesx($image);
        $height = imagesy($image);

        $original_aspect = $width / $height;
        $thumb_aspect = $thumb_width / $thumb_height;

        if ($original_aspect >= $thumb_aspect) {
            // If image is wider than thumbnail (in aspect ratio sense)
            $new_height = $thumb_height;
            $new_width = $width / ($height / $thumb_height);
        } else {
            // If the thumbnail is wider than the image
            $new_width = $thumb_width;
            $new_height = $height / ($width / $thumb_width);
        }

        $thumb = imagecreatetruecolor($thumb_width, $thumb_height);

        // Resize and crop
        imagecopyresampled($thumb,
            $image,
            0 - ($new_width - $thumb_width) / 2, // Center the image horizontally
            0 - ($new_height - $thumb_height) / 2, // Center the image vertically
            0, 0,
            $new_width, $new_height,
            $width, $height);
        imagecopy($thumb, $watermark, 500 - 223, 300 - 25, 0, 0, imagesx($watermark), imagesy($watermark));
        imagepng($thumb, $destination);
        imagedestroy($thumb);
        return $destination;
    }

    public static function product_price($priceFloat)
    {
        $symbol = ' VNĐ';
        $symbol_thousand = '.';
        $decimal_place = 0;
        $price = number_format($priceFloat, $decimal_place, '', $symbol_thousand);
        return $price . $symbol;
    }

}
