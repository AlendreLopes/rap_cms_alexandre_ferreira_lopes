<?php
/**
 * This class is a writer on picture
 * 
 * @package    Write on picture
 * @author     Nabi KaramAliZadeh <info@nabi.ir>
 * @copyright  2008 (c) Nabi.ir
 * @license    http://www.gnu.org/copyleft/gpl.html
 * @version    1.0.0
 * @link       http://weblog.nabi.ir/post-27.html [documentation in persian]
 * @since      12 April 2008
 */
class WriteOnPicture
{
    var $inputImage  = '';                  // input file name
    var $inputType   = 'jpg';               // input file format: JPG, PNG, GIF, BMP
    var $outputImage = '';                  // output file name
    var $outputType  = 'png';               // output file format:JPG, PNG, GIF, BMP
    var $text        = '';                  // text to write on image
    var $fontSize    = 5;                   // text size: 1,2,3,4,5
    var $textColor   = array(255, 255, 255);// text color: RGB decimal
    var $borderFlag  = true;                // flag of border: TRUE, FALSE
    var $borderColor = array(0, 0, 0);      // border color: RGB decimal
    var $backFlag    = false;               // flag of background: TRUE, FALSE
    var $backColor   = array(200, 200, 200);// background color: RGB decimal
    var $marginH     = 0;                   // text horizonatal margin in pixels
    var $marginV     = 0;                   // text vertical margin in pixels
    var $alignH      = 'LEFT';              // text horizonatal position, LEFT | CENTER | RIGHT
    var $alignV      = 'TOP';               // text vertical position, TOP | CENTER | BOTTOM
    var $quality     = 85;                  // quality out file, only for JPG format
    var $opacity     = 60;                  // text opacity: 0-100
    var $show        = true;                // show image: TRUE, FALSE
    var $save        = false;               // save out file: TRUE, FALSE
    var $error       = null;                // return error message

    function Action()
    {
        // Set function to create image
        if (!$this->inputImage)
        {
            $this->error = 'Not found input file.';
            return false;
        }

        switch (strtolower($this->inputType))
        {
            case "png":
                $createFunc = "imagecreatefrompng";
            break;
            case "gif";
                $createFunc = "imagecreatefromgif";
            break;
            case "bmp";
                $createFunc = "imagecreatefrombmp";
            break;
            case "jpeg":
            case "jpg":
                $createFunc = "imagecreatefromjpeg";
            break;
        }
        // Create image
        $im = @$createFunc($this->inputImage);
        if (!$im)
        {
            $this->error = 'Invalid format file.';
            return false;
        }
        // Create box
        $this->fontSize = intval($this->fontSize);
        if ($this->fontSize < 1) $this->fontSize = 1;
        if ($this->fontSize > 5) $this->fontSize = 5;
        $width  = strlen($this->text) * ($this->fontSize + 4);
        $height = $this->fontSize + 12;
        $overlay_img = imagecreatetruecolor($width+2, $height+2);
        if ($this->backFlag)
        {
            $bgColor = imagecolorallocate($overlay_img, $this->backColor[0], $this->backColor[1], $this->backColor[2]);
        }
        else 
        {
            $bgColor = imagecolortransparent($overlay_img);
        }
        imagefill($overlay_img ,0 ,0 ,$bgColor);
        // Insert border
        if ($this->borderFlag)
        {
            $color = imagecolorallocate($overlay_img, $this->borderColor[0], $this->borderColor[1], $this->borderColor[2]);
            imagestring($overlay_img, $this->fontSize, 0, 0, $this->text, $color);
            imagestring($overlay_img, $this->fontSize, 2, 2, $this->text, $color);
            imagestring($overlay_img, $this->fontSize, 2, 0, $this->text, $color);
            imagestring($overlay_img, $this->fontSize, 0, 2, $this->text, $color);
        }
        // Insert text
        $color = imagecolorallocate($overlay_img, $this->textColor[0], $this->textColor[1], $this->textColor[2]);
        imagestring($overlay_img, $this->fontSize, 1, 1, $this->text, $color);
        // Get width and height box
        $overlay_w = ImageSX($overlay_img);
        $overlay_h = ImageSY($overlay_img);
        // Get width and height image
        $im_w = ImageSX($im);
        $im_h = ImageSY($im);
        // Set X text
        switch (strtoupper($this->alignH))
        {
            case 'CENTER':
                $x = ($im_w - $overlay_w) / 2;
            break;
            case 'RIGHT':
                $x = $im_w - $overlay_w - $this->marginH;
            break;
            case 'LEFT':
                $x = 0 + $this->marginH;
            break;
        }
        // Set Y text
        switch (strtoupper($this->alignV))
        {
            case 'CENTER':
                $y = ($im_h - $overlay_h) / 2;
            break;
            case 'BOTTOM':
                $y = $im_h - $overlay_h - $this->marginV;
            break;
            case 'TOP':
                $y = 0 + $this->marginV;
            break;
        }
        // Merge text box with image
        imagecopymerge($im, $overlay_img, $x, $y, 0, 0, $overlay_w, $overlay_h, $this->opacity);
        // Destroy text box
        imagedestroy($overlay_img);
        // Save to disk
        if ($this->save)
        {
            if (!$this->outputImage)
            {
                $this->error = 'Not found output file.';
                return false;
            }

            switch (strtolower($this->outputType))
            {
                case "png":
                    imagepng($im, $this->outputImage);
                break;
                case "gif";
                    imagegif($im, $this->outputImage);
                break;
                case "bmp";
                    imagewbmp($im, $this->outputImage);
                break;
                case "jpeg":
                    imagejpeg($im, $this->outputImage, $this->quality);
                case "jpg":
                    imagejpeg($im, $this->outputImage, $this->quality);
                break;
            }
        }
        // Show the image
        if ($this->show)
        {
            switch ($this->outputType)
            {
                case "png":
                    header("Content-type: image/png");
                    imagepng($im);
                break;
                case "gif";
                    header("Content-type: image/gif");
                    imagegif($im);
                break;
                case "bmp";
                    header("Content-type: image/bmp");
                    imagewbmp($im);
                break;
                case "jpeg":
                    header("Content-type: image/jpeg");
                    imagejpeg($im, null, $this->quality);
                case "jpg":
                    header("Content-type: image/jpg");
                    imagejpeg($im, null, $this->quality);
                break;
            }
        }
        // Destroy image
        imagedestroy($im);
        return true;
    }
}
?>
