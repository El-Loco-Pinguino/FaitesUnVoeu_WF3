<?php
/*****************************************************************************
 * textImg Class - Editing some text in image with the GD 2 library
 *
 * @version 1
 * @copyright Christophe Helson march 2006
 */
namespace wf3
{
	class CIMG 
	{

		public $img; //resource
		public $width; //width
		public $height; //height
		public $string;
		public $font;
		public $size;
		public $angle;
		public $color; //integer

		const PRE = "font/"; //path to the fonts folder
		const DFONT = "font/andy.ttf"; //default values
		const DSIZE = 20;
		const DANGLE = 0;
		const WALL = "../images/brickwall.png"; //the background image
		const THUMB = "../images/thumb.png"; //temporary thumbnail result
		const SAMPLE = "../images/sample.png"; //choosen color sample

		static public function sample($tabcol,$file=self::SAMPLE)
		{
			$samp = imagecreatetruecolor(20,20);
			$color = imagecolorallocate($samp,$tabcol[0],$tabcol[1],$tabcol[2]);
			imagefill($samp,0,0,$color);
			imagepng($samp,$file);
		}

		public function __construct($string=" ",$font=self::DFONT,$size=self::DSIZE,$angle=self::DANGLE,$color="") 
		{
			$this->width = 100;
			$this->height = 100; //fake values, these two variables will be updated later
			$this->img = imagecreatetruecolor($this->width,$this->height);
			$this->chgstring($string);
			$this->chgfont($font);
			$this->chgsize($size);
			$this->chgangle($angle);
			if ($color=="") { //default color
				$grey = imagecolorallocate($this->img,100,100,100);
				$this->color = $grey;
				}
			else $this->chgcolor($color);
			$this->update();
		}

		public function __destruct() 
		{
			imagedestroy($this->img);
		}

		public function chgstring($string)
		{
			$this->string = stripslashes($string);
		}

		public function chgfont($string)
		{  //andy | bickley | chiller | gigi | gothice | harlowsi | jokerman | mistral
			$this->font = realpath(self::PRE.$string.".ttf");
		}

		public function chgsize($size)
		{
			$this->size = $size;
		}

		public function chgcolor($tab)
		{
			if ($tab[0]==0 and $tab[1]==0 and $tab[2]==0) { //the pure black (0,0,0) is used for transparency color
				$tab[2]=1;
			}
			$this->color = imagecolorallocate($this->img,$tab[0],$tab[1],$tab[2]);
		}

		public function chgangle($angle)
		{
			$this->angle = $angle;
		}

		public function update()
		{
			$black = imagecolorallocate($this->img,0,0,0);
			$shift = imagefontheight($this->font);
			putenv('GDFONTPATH=' . realpath(self::PRE));
			$pos = imagettftext($this->img,$this->size,$this->angle,0,0,$black,$this->font,$this->string); //the purpose of this line is only to get the 4 positions of the rectangle
			$this->width = max(abs($pos[0]-$pos[4]),abs($pos[2]-$pos[6])) + 2*$shift;
			$this->height = max(abs($pos[1]-$pos[5]),abs($pos[3]-$pos[7])) + 2*$shift;
			$this->img = imagecreatetruecolor($this->width,$this->height);
			imagealphablending($this->img,false);
			imagefill($this->img,0,0,$black);
			imagecolortransparent($this->img,$black);
			if ($this->angle>=0) imagettftext($this->img,$this->size,$this->angle,$shift+max(abs($pos[0]),abs($pos[6])),$this->height-$shift,$this->color,$this->font,$this->string);
			else imagettftext($this->img,$this->size,$this->angle,$shift,abs($pos[1]-$pos[7])+$shift,$this->color,$this->font,$this->string);
			imagepng($this->img,self::THUMB);
		}

		public function merge($x,$y)
		{ //writes the thumbnail on the background image
			$wall = self::WALL;
			$imgwall = imagecreatefrompng($wall);
			$x = $x-($this->width/2);
			$y = $y-($this->height/2);
			$var = imagecopymerge($imgwall,$this->img,$x,$y,0,0,$this->width,$this->height,80);
			imagepng($imgwall,$wall);
			$numb = rand(0,5);
			if ($numb==4) { //sometimes creates a backup copy image
				$var = date('y-m-d_H-i-s');
				$backup = "../images/temp/brickwall".$var.".png";
				imagepng($imgwall,$backup);
			}
		}

	}
}

?>