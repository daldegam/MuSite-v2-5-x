<?php
if($_GET['returnType'] == "table")
{
?>
<style>   
body
{
    margin: 0px;
    padding: 0px;       
} 
.guildMarkMaker
{                          
    border-width: 1px;
    border-style: solid;
    border-color: #999999;     
    background-color: #FFFFFF;
    border-collapse: collapse;
}
.guildMarkMaker td
{
    width: 13.5px;
    height: 13px;
    background-color: #000000;
}
</style>
 
<table class="guildMarkMaker">
    <tr>
        <td id="0"></td>
        <td id="1"></td>
        <td id="2"></td>
        <td id="3"></td>
        <td id="4"></td>
        <td id="5"></td>
        <td id="6"></td>
        <td id="7"></td>
    </tr>
    <tr>
        <td id="8"></td>
        <td id="9"></td>
        <td id="10"></td>
        <td id="11"></td>
        <td id="12"></td>
        <td id="13"></td>
        <td id="14"></td>
        <td id="15"></td>
    </tr>
    <tr>
        <td id="16"></td>
        <td id="17"></td>
        <td id="18"></td>
        <td id="19"></td>
        <td id="20"></td>
        <td id="21"></td>
        <td id="22"></td>
        <td id="23"></td>
    </tr>
    <tr>
        <td id="24"></td>
        <td id="25"></td>
        <td id="26"></td>
        <td id="27"></td>
        <td id="28"></td>
        <td id="29"></td>
        <td id="30"></td>
        <td id="31"></td>
    </tr>
    <tr>
        <td id="32"></td>
        <td id="33"></td>
        <td id="34"></td>
        <td id="35"></td>
        <td id="36"></td>
        <td id="37"></td>
        <td id="38"></td>
        <td id="39"></td>
    </tr>
    <tr>
        <td id="40"></td>
        <td id="41"></td>
        <td id="42"></td>
        <td id="43"></td>
        <td id="44"></td>
        <td id="45"></td>
        <td id="46"></td>
        <td id="47"></td>
    </tr>
    <tr>
        <td id="48"></td>
        <td id="49"></td>
        <td id="50"></td>
        <td id="51"></td>
        <td id="52"></td>
        <td id="53"></td>
        <td id="54"></td>
        <td id="55"></td>
    </tr>
    <tr>
        <td id="56"></td>
        <td id="57"></td>
        <td id="58"></td>
        <td id="59"></td>
        <td id="60"></td>
        <td id="61"></td>
        <td id="62"></td>
        <td id="63"></td>
    </tr>
</table> 
<script type="text/javascript"> 
var PSetColor = "#FFFFFF";
var PSetHex = 0;
var newHex = new Array();
function getHexColor(blockHex)
{
    switch(blockHex)
    {
        case("0"): return "#FFFFFF";
        case("1"): return "#000000";
        case("2"): return "#8c8a8d";
        case("3"): return "#ffffff";
        case("4"): return "#fe0000";
        case("5"): return "#ff8a00";
        case("6"): return "#ffff00";
        case("7"): return "#8cff01";
        case("8"): return "#00ff00";
        case("9"): return "#01ff8d";
        case("A"):case("a"): return "#00ffff";
        case("B"):case("b"): return "#008aff";
        case("C"):case("c"): return "#0000fe";
        case("D"):case("d"): return "#8c00ff";
        case("E"):case("e"): return "#ff00fe";
        case("F"):case("f"): return "#ff008c";
        default: return "#000000"; 
    }
}
 
function setBlockColor(block, hex)
{
    document.getElementById(block).style.background = hex;
    return true;
}
 
function str_split(string, split_length) 
{
    if (string === undefined || !string.toString || split_length < 1) {
        return false;
    }
    return string.toString().match(new RegExp('.{1,' + (split_length || '1') + '}', 'g'));
}
 
function makeDefaultColorsBlock(dumpHex)
{
    dumpHex = str_split(dumpHex); 
    for(loop = 0; loop < 64; loop++)
    {   
        newHex[loop] = dumpHex[loop]; 
        setBlockColor(loop, getHexColor( dumpHex[loop] ));
    }
}                                                                                            
 
makeDefaultColorsBlock("<?=$_GET['decode'];?>");
</script>
<?php
exit();    
}
class gmark {
	private $mark;
	private $img;
	private $px;
	private $size;
	public function __construct($mark, $size) 
	{
		if($size > 100) $size = 100;
		$this->size = $size;
		$this->createImage();
		if(strlen($mark) != 64) 
		{
			imagecolorallocate($this->img, 255, 255, 255);
			$this->getMarkX();	 
		} 
		else 
		{
			imagecolorallocatealpha($this->img, 255, 255, 255, 127);
			$this->mark = str_split($mark);
			$this->getMark();
		}
	}
	private function getMarkX() 
	{
		imagefilledrectangle($this->img, 0, 0, $this->size, $this->size, imagecolorallocate($this->img, 255, 255, 255));
		$red = imagecolorallocate($this->img, 255, 0, 0);
		imageline($this->img, 0, 0, $this->size, $this->size, $red);
		imageline($this->img, 0, $this->size, $this->size, 0, $red);
	}
	private function createImage() 
	{
		$this->img = imagecreate($this->size, $this->size);
		$this->px = $this->size/8;  
	}
	private function getMark() 
	{
		$y = 0; $x = 0;
		foreach($this->mark as $i => $new) 
		{
			if(ctype_xdigit($new) == false) 
			{
				$this->getMarkX();
				break;
			}
			if($i == 0) { $x = 0; } 
			elseif(($i % 8) == 0) { $y += $this->px; $x = 0;}
			else { $x += $this->px; }
			$tempColor = $this->getColor($new);
			if($tempColor != false) $cor = imagecolorallocate($this->img, $tempColor[0], $tempColor[1], $tempColor[2]);
			else $cor = imagecolorallocatealpha($this->img, 255, 255, 255, 127);
			imagefilledrectangle($this->img, $x, $y, $x+$this->px, $y+$this->px, $cor);
		}
	}
	private function getColor($str) 
	{
		switch(strtolower($str)) 
		{
			case(1) : return(array(0 ,0, 0)); break;
			case(2) : return(array(128, 128, 128)); break;
			case(3) : return(array(255, 255, 255)); break;
			case(4) : return(array(254, 0, 0)); break;
			case(5) : return(array(255, 127, 0)); break;
			case(6) : return(array(255, 255, 0)); break;
			case(7) : return(array(128, 255, 0)); break;
			case(8) : return(array(0, 255, 1)); break;
			case(9) : return(array(0, 254, 129)); break;
			case("a") : return(array(0, 255, 255)); break;
			case("b") : return(array(0, 128, 255)); break;
			case("c") : return(array(0, 0, 254)); break;
			case("d") : return(array(127, 0, 255)); break;
			case("e") : return(array(255, 0, 254)); break;
			case("f") : return(array(255,0 ,128)); break;
			default : return(false); break;
		}
	}
	public function __destruct() 
	{
		header("Content-Type: image/png", true);
		imagepng($this->img, null, 9);
		imagedestroy($this->img);
	}
}
new gmark($_GET['decode'], 130);
?>