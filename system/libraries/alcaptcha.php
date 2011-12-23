<?php
/* 
 * Altesack captcha library
 * http://blogocms.ru/2009/07/alcaptcha-kapcha-ajax-codeigniter/
 * Anyone can use and modify this script anyway
 */
class alcaptcha {
    function generate_code($charlen){
	// Здесь задаётся алгоритм выдачи случайного числа.
	$possible = '23456789bcdfghjkmnpqrstvwxyz';
	$code = '';
	$i = 0;
	while ($i < $charlen) {
		$code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
		$i++;
	}
	$CI =& get_instance();
	$CI->session->set_userdata('alcode',$code);

	return $code;
    }
    function check($code){
        $CI =& get_instance();
//        echo $code."<br>";
//        echo $CI->session->userdata('alcode')."<br>";
        if ($CI->session->userdata('alcode')== $code) {
            return true;
        } else {
            return false;
        }

    }
    function image() {
	// Здесь задаётся алгоритм рисования капчи.
        // Его можно поменять, если есть картинка лучше
	$im = @imagecreate (90, 30) or die ("Cannot initialize new GD image stream!");
        $bg = imagecolorallocate ($im, 240, 240, 255);
        imagerectangle  ( $im  , 0  , 0  , 89  , 29  , imagecolorallocate ($im, 200, 200, 220));
	

        $CI =& get_instance();
	$char =$CI->session->userdata('alcode');

        //создаём шум на фоне
	for ($i=0; $i<=128; $i++) {
		$color = imagecolorallocate ($im, rand(100,240), rand(100,240), rand(100,255)); //задаём цвет
		imagesetpixel($im, rand(2,90), rand(2,20), $color); //рисуем пиксель
	}

        //выводим символы кода
	for ($i = 0; $i < strlen($char); $i++) {
		$color = imagecolorallocate ($im, rand(0,240), rand(0,240), rand(0,128)); //задаём цвет
		$x = 5 + $i * 20;
		$y = rand(-2, 10);
		imagechar ($im, 5, $x, $y, $char[$i], $color);
	}

	//антикеширование
	header("Expires: Thu, 01 Jan 1980 00:00:00 GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	//создание рисунка в зависимости от доступного формата
	if (function_exists("imagepng")) {
		   header("Content-type: image/png");
		   imagepng($im);
		} elseif (function_exists("imagegif")) {
		   header("Content-type: image/gif");
		   imagegif($im);
		} elseif (function_exists("imagejpeg")) {
		   header("Content-type: image/jpeg");
		   imagejpeg($im);
		} else {
		   die("No image support in this PHP server!");
		}
		imagedestroy ($im);


    }
}

?>
