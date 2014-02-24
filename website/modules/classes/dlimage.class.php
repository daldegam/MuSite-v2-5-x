<?php

/*~ dlimage.class.php
.-----------------------------------------------------------------------------.
|  Software: DLImage - PHP Image Manipulator Class                            |
|   Version: 1.0                                                              |
|   Contact: Denis Lins <denislins@hotmail.com>						          |
|      Info: http://www.denislins.com.br/                                     |
|   Support: http://www.denislins.com.br/                                     |
| ----------------------------------------------------------------------------|
|    Author: Denis Lins (project administrator, coder) denislins@hotmail.com  |
| Copyright (c) 2010, Denis Lins. All Rights Reserved.             		      |
| ----------------------------------------------------------------------------|
|   License: Distributed under the General Public License (GNU)               |
|            http://www.gnu.org/copyleft/gpl.html                             |
| 	Check the link and learn more about this license.            			  |
| ----------------------------------------------------------------------------|
| 	   NOTE: Only tested in PHP 5.2.6. If you find any error or bug on this   |
| class, please contact me at my email address above, so it can be fixed as   |
| fast as possible. Thank you for use my class, i hope that it will be useful |
| for you :)			 													  |
'-----------------------------------------------------------------------------'
*/

/**
 * DLImage - PHP Image Manipulator Class
 * @package DLImage
 * @author Denis Lins
 * @copyright 2010 Denis Lins
 * @version 1.0
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @version 1.1 - Adapta��es por Leandro Daldegam
 */
 
class DLImage
{
	
	/*
	  Properties - All properties are private to prevent erroneous data
	*/
	
	private $image		  = null;
	private $error		  = 0;
	private $imageName 	  = null;
	public $info		  = array();
	private $bgColor 	  = 16777215;
	private $defaultPath  = '';
	private $log 		  = array();
	private $hashType     = 'md5';
	private $useHashNames = true;
	private $validExt     = array('jpg', 'jpeg', 'gif', 'png', 'bmp');
	private $quality      = 80;
	private $timestamp    = 0;
    private $bufferImage  = null;
	

	
	/*
	  Constants
	*/
	
	
	
	
	/**
	 * Information constants, sets the mode the information of the image is shown
	 */
	 
	const
		INFO_MODE_FULL 		= 'full', 		//returns a full array with the informations of the image
		INFO_MODE_DIRNAME 	= 'dirname', 	//returns the name of the dir of the image
		INFO_MODE_BASENAME 	= 'basename', 	//returns the basename of the image
		INFO_MODE_EXTENSION = 'extension', 	//returns the extension of the image
		INFO_MODE_FILENAME 	= 'filename', 	//returns the filename of the image
		INFO_MODE_SIZE 		= 'size', 		//returns the size (in bytes) of the image
		INFO_MODE_WIDTH		= 'width', 		//returns the width of the image
		INFO_MODE_HEIGHT 	= 'height',		//returns the height of the image
		INFO_MODE_FORMAT 	= 'format' 		//returns the format of the image
	;
	
	
	

	/**
	 * Image type constants
	 */
	
	const
		EXTENSION_PNG  = 'png',
		EXTENSION_GIF  = 'gif',
		EXTENSION_JPG  = 'jpg',
		EXTENSION_JPEG = 'jpg'
	;
	
	
	
	
	/*
	  Functions
	*/
	
	
	
	/**
	 * Constructor
	 * @param string $image Path to image
	 */
   
	public function __construct($image = false)
	{
		$this->eventLog('The class was started', __FILE__, __LINE__);
		if(empty($image) === false)
		{
			$this->loadImage($image);
		}
	}
	
	
	
	
	/**
	 * Destructor - Destroys the image resource if it exists
	 */
	
	public function __destruct()
	{
		if(is_resource($this->image))
		{
			imagedestroy($this->image);
		}
	}
	
	
	
	
	/**
	 * Private functions
	 */
	 
	 
	 
	 
	/**
	 * Makes a clean name to the image
	 * @return string A clean name to the image
	 */
	
	private function getImageName($extension = false, $prepend = '', $fixName = false)
	{
		$ext = empty($extension) ? $this->info['extension'] : $extension;
        if($fixName == false)
        {
		    $name = $this->info['filename'] . $this->timestamp;
		    return ($this->finalName = ($this->useHashNames ? hash($this->hashType, $name) : $this->getCleanName($name))) . '.' . $prepend . '.' . $ext;
        }
        else
        {
            return $fixName . '.' . $prepend . '.' . $ext; 
        }
	}
	
	
	
	
	/**
	 * Makes a clean name to the imagem without a hash
	 * @param string $name Image name
	 * @return string Clean name
	 */
	
	private function getCleanName($name)
	{
		$name = html_entity_decode($name);
		$name = strtolower($name);
		$name = preg_replace('/(a|á|à|ã|â|ä)/', 'a', $name);
		$name = preg_replace('/(e|é|è|ê|ë)/', 'e', $name);
		$name = preg_replace('/(i|í|ì|î|ï)/', 'i', $name);
		$name = preg_replace('/(o|ó|ò|õ|ô|ö)/', 'o', $name);
		$name = preg_replace('/(u|ú|ù|û|ü)/', 'u', $name);
		$name = preg_replace('/ç/', 'c', $name);
		$name = preg_replace('/ñ/', 'n', $name);
		$name = preg_replace('/( )/', '-', $name);
		$name = preg_replace('/[^a-z0-9\-]/i', '' ,$name);
		$name = preg_replace('/--/', '-', $name);
		return $name;
	}
	
	
	
	
	/**
	 * Validates the image
	 * @return boolean true if image is valid and false if it's not
	 */
	
	private function validImage()
	{
		if(is_file($this->image) === false)
		{
			$this->eventLog($this->image . ' does not exists', __FILE__, __LINE__);
			return false;
		}
		
		$this->fileInfo();
		
		if(in_array($this->info['extension'], $this->validExt) === false)
		{
			$this->eventLog($this->image . ' is not a valid image', __FILE__, __LINE__);
			return false;
		}
		
		$this->eventLog($this->image . ' is a valid image', __FILE__, __LINE__);
		
		return true;
	}
	
	
	
	
	/**
	 * Gets the information of the file
	 * @return void
	 */
	
	private function fileInfo()
	{
		$this->info = array();
		
		$pathinfo = pathinfo($this->image);
		
		$this->info['dirname'] 	 = $pathinfo['dirname'];
		$this->info['basename']  = $pathinfo['basename'];
		$this->info['extension'] = strtolower($pathinfo['extension']);
		$this->info['filename']  = $pathinfo['filename'];
		$this->info['size']      = filesize($this->image);
	}
	
	
	
	
	/**
	 * Gets the information of the image
	 * @return true on success and false on error
	 */
	
	private function imageInfo()
	{
		if(is_file($this->image) === false)
		{
			$this->eventLog('No picture was uploaded', __FILE__, __LINE__);
			return false;
		}
		else
		{
			$size = getimagesize($this->image);
			
			$this->info['width']  = $size[0];
			$this->info['height'] = $size[1];
			$this->info['format'] = $size[2];
			
			return true;
		}
	}
	
	
	
	
	/**
	 * Sets an information to the log
	 * @return void
	 */
	
	private function eventLog($message, $file, $line)
	{
		$this->log[] = array (
		
			'message' => $message,
			'file'    => $file,
			'line'    => $line
			
		);
	}
	
	
	
	
	/**
	 * Create image resource
	 * @return void
	 */
	
	private function createImage()
	{
		switch($this->info['format'])
		{
			case IMAGETYPE_GIF: 
				$this->image = @imagecreatefromgif($this->image); 
					break;
			case IMAGETYPE_JPEG: 
				$this->image = @imagecreatefromjpeg($this->image); 
					break;
			case IMAGETYPE_PNG: 
				$this->image = @imagecreatefrompng($this->image); 
					break;
			case IMAGETYPE_BMP:
				if(function_exists('imagecreatefrombmp'))
				{
					$this->image = @imagecreatefrombmp($this->image); 
				}
				else
				{
					$this->eventLog('The function to work with BMP files was not found', __FILE__, __LINE__);
				}
					break;
			default: 
				$this->eventLog('This file is not a valid image', __FILE__, __LINE__);
		}
		
		if(is_resource($this->image) === true)
		{
			$this->eventLog('The image resource was created successfully', __FILE__, __LINE__);
			return true;
		}
		else
		{
			$this->eventLog('An error occurred while create the image resource', __FILE__, __LINE__);
			return false;
		}
	}
    
    
    
    
    /**
     * Returns the extension of the file
     * @return string The file extension
     */
    
    private function getFileExtension($filename)
    {
        $filename = explode('.', $filename);
        return $filename[count($filename) - 1];
    }
	
	
	
	
	/**
	 * Variable functions
	 */
	 
	 
	 
	 
	/**
	 * Sets the background color used in some functions
	 * @param mixed $color The color that will be used
	 * @return boolean true on success and false on errors
	 */
	
	public function setBackgroundColor($color)
	{
		if(is_resource($this->image) === false)
		{
			$this->eventLog('No picture was uploaded', __FILE__, __LINE__);
			return false;
		}
		
		if(is_string($color))
		{
			if($color{0} == '#')
			{
				$color = substr($color, 1, strlen($color) - 1);
			}
			
			if(preg_match('/^[[:xdigit:]]{3}$/i', $color) === 0 && preg_match('/^[[:xdigit:]]{6}$/i', $color) === 0)
			{
				$this->eventLog('Invalid color: ' . $color, __FILE__, __LINE__);
				return false;
			}

			if(strlen($color) == 3)
			{
				$color .= $color;
			}
			
			$rgb = array(hexdec(substr($color, 0, 2)), hexdec(substr($color, 2, 2)), hexdec(substr($color, 4, 2)));
			$this->eventLog('The background color was changed to rgb(' . implode(', ', $rgb) . ')', __FILE__, __LINE__);
			$this->bgColor = imagecolorallocate($this->image, $rgb[0], $rgb[1], $rgb[2]);
			return true;
		}
		elseif(is_array($color))
		{
			if(count($color) != 3)
			{
				$this->eventLog('Invalid color: ' . $color, __FILE__, __LINE__);
				return false;
			}
			
			if(is_numeric($color[0]) === false || $color[0] < 0 || $color[0] > 255)
			{
				$this->eventLog('Invalid color: ' . $color, __FILE__, __LINE__);
				return false;
			}
			if(is_numeric($color[1]) === false || $color[1] < 0 || $color[1] > 255)
			{
				$this->eventLog('Invalid color: ' . $color, __FILE__, __LINE__);
				return false;
			}
			if(is_numeric($color[2]) === false || $color[2] < 0 || $color[2] > 255)
			{
				$this->eventLog('Invalid color: ' . $color, __FILE__, __LINE__);
				return false;
			}
			
			$this->eventLog('The background color was changed to rgb(' . implode(', ', $color) . ')', __FILE__, __LINE__);
			$this->bgColor = imagecolorallocate($this->image, $color[0], $color[1], $color[2]);
			
			return true;
		}
		else
		{
			$this->eventLog('Invalid color: ' . $color, __FILE__, __LINE__);
			return false;
		}
	}
	
	
	
	
	/**
	 * Sets the default path to save the images
	 * @param string $path The path
	 * @return boolean true if $path is a dir or false if not
	 */
	 
	public function setDefaultPath($path, $createDir = false)
	{
		$path = (string) $path;
        
		if($createDir === true && file_exists($path) === false)
		{
			if(@mkdir($path) === true)
			{
				$this->eventLog('Dir "' . $path . '" was created sucessfully', __FILE__, __LINE__);
			}
			else
			{
				$this->eventLog('Failed to create dir "' . $path . '"', __FILE__, __LINE__);
				return false;
			}
		}
		
		if(is_dir($path) === true)
		{
			$this->eventLog('Default path changed to "' . $path . '"', __FILE__, __LINE__);
			$this->defaultPath = $path;
			return true;
		}
		else
		{
			$this->eventLog('"' . $path . '" is not a valid dir', __FILE__, __LINE__);
			return false;
		}
	}
	
	
	
	
	/**
	 * Reloads the image
	 * @return void
	 */
	
	public function reloadImage()
	{
		$this->eventLog($this->imageName . ' was reloaded', __FILE__, __LINE__);
		$this->loadImage($this->imageName);
	}
	
	
	
	
	/**
	 * Sets the encryption type to be used
	 * @return boolean true on success and false on errors
	 */
	 
	public function setHashType($hash)
	{
		foreach(hash_algos() as $algo)
		{
			if($hash == $algo)
			{
				$this->eventLog('The hash algorithm was changed to ' . $hash, __FILE__, __LINE__);
				return true;
			}
		}
		
		$this->eventLog('This algorithm does not exist', __FILE__, __LINE__);
		return false;
	}
	
	
	
	
	/**
	 * Sets if the image name will be encrypted or not
	 * @return void
	 */
	 
	 public function useHashNames($bool)
	 {
		 if($bool === true)
		 {
			 $this->useHashNames = true;
			 $this->eventLog('The option of using encrypted names has been enabled', __FILE__, __LINE__);
		 }
		 else
		 {
			 $this->useHashNames = false;
			 $this->eventLog('The option of using encrypted names has been disabled', __FILE__, __LINE__);
		 }
	 }
	 
	 
	
	 
	/**
	 * Sets the extensions that are valid
	 * @return boolean true on success and false on errors
	 */
	 
	public function setValidExtensions($extensions)
	{
		if(is_array($extensions) === false || count($extensions) <= 0)
		{
			$this->eventLog('$extensions must be an array with at least one element', __FILE__, __LINE__);
			return false;
		}
		else
		{
			$this->validExt = $extensions;
			$this->eventLog('The allowed extension' . (count($this->validExt) > 1 ? 's are' : ' is') . ': ' . implode(', ', $this->validExt), __FILE__, __LINE__);
			return true;
		}
	}
	
	
	
	
	/**
	 * Sets the JPEG Quality
	 * @return boolean true on success and false on errors
	 */
	 
	public function setJpegQuality($quality)
	{
		if(is_numeric($quality) === false || $quality < 0 || $quality > 100)
		{
			$this->eventLog('$quality must be greater than zero and lower than a hundred', __FILE__, __LINE__);
			return false;
		}
		else
		{
			$this->quality = round($quality);
			$this->eventLog('JPEG Quality changed to ' . $this->quality, __FILE__, __LINE__);
			return true;
		}
	}
	
	
	
	
	/**
	 * Public functions
	 */
	 
	 
	  
	
	/**
	 * Loads and validates the image
	 * @param string $image Path to image
	 * @return void
	 */
	
	public function loadImage($image)
	{
		$this->image = $this->imageName = $image;
		
		$this->timestamp = time();
		
		$this->eventLog($image . ' was loaded, starting validation', __FILE__, __LINE__);
		
		if($this->validImage() === false)
		{
			return false;
		}
		
		if($this->imageInfo() === false)
		{
			return false;
		}
		
		if($this->createImage() === false)
		{
			return false;
		}
		
		$this->eventLog($image . ' was successfully loaded', __FILE__, __LINE__);
		return true;
	}
    
    
    
    /**
     * Saves an image in a folder
     * @param array $resource a $_FILES array
     * @param bool $createResource if true, the class will automatically create a resource to be used
     * @param string $path Path to save the image; if false, the path is used is defined in property $defaultPath
     * @return boolean
     */

    
    public function uploadImage($resource, $createResource = true, $path = false)
    {
        $extension = self::getFileExtension($resource['name']);
        
        if(in_array($extension, $this->validExt) === false)
        {
            $this->eventLog($resource['name'] . ' is not a valid image', __FILE__, __LINE__);
            return false;
        }
        
        if(empty($path) === true)
        {
            if($this->defaultPath === false)
            {
                $this->eventLog('Default path is undefined', __FILE__, __LINE__);
                return false;
            }
            else
            {
                $path = $this->defaultPath;
            }
        }
        
        $imagename = md5($resource['name'] . mt_rand(0, 9999)) . '.' . $extension;
        
        $this->bufferImage = $path . '/' . $imagename;                   
        
        if(move_uploaded_file($resource['tmp_name'], $this->bufferImage) !== true)
        {
            $this->eventLog('There was an error while saving the image', __FILE__, __LINE__);
            return false;
        }
        
        $this->eventLog($resource['name'] . ' was successfully saved in ' . $path, __FILE__, __LINE__);
        
        if($createResource === true)
        {
            $this->loadImage($this->bufferImage);
        }
        
        return true;
    }
    
    
    
    /**
    * Deletes a buffered image
    * @return boolean
    */
    
    public function deleteBufferImage()
    {
        $success = @unlink($this->bufferImage);
        
        $this->eventLog($success ? $this->bufferImage . ' was sucessfully deleted' : 'There was an error while saving the image', __FILE__, __LINE__);
    }
	
	
	
	
	/**
	 * Returns the information of the image
	 * @return mixed The information that was requested
	 */
	
	public function getInfo($mode = 'full')
	{
		switch($mode)
		{
			case 'full':
				return $this->info;
					break;
			case 'dirname':
				return $this->info['dirname'];
					break;
			case 'basename':
				return $this->info['basename'];
					break;
			case 'extension':
				return $this->info['extension'];
					break;
			case 'filename':
				return $this->info['filename'];
					break;
			case 'size':
				return $this->info['size'];
					break;
			case 'width':
				return $this->info['width'];
					break;
			case 'height':
				return $this->info['height'];
					break;
			case 'format':
				return $this->info['format'];
					break;
			default:
				return $this->info;
		}
	}
	
	
	
	
	/**
	 * Returns the event log
	 * @return array
	 */
	
	public function getLog()
	{
		return $this->log;
	}
	
	
	
	
	/**
	 * Manipulation functions
	 */
	 
	 
	 
	 
	/**
	 * Resizes the image to specified size
	 * @param int $width Width
	 * @param int $height Height
	 * @return boolean true on success and false on errors
	 */
	 
	public function resizeImage($width = 0, $height = 0)
	{
		if(is_resource($this->image) === false)
		{
			$this->eventLog('No picture was uploaded', __FILE__, __LINE__);
			return false;
		}
		
		$validWidth = (is_numeric($width) === true && $width > 0);
		$validHeight = (is_numeric($height) === true && $height > 0);
		
		if($validWidth  === false && $validHeight === false) 
		{
			$this->eventLog($width . '/' . $height . ' is not a valid dimension', __FILE__, __LINE__);
			return false;
		}
		elseif($validWidth  === false && $validHeight === true) 
		{
			$width = round($this->info['width'] / ($this->info['height'] / $height));
			$this->eventLog('Width is invalid, assumed ' . $width, __FILE__, __LINE__);
		}
		elseif($validWidth  === true && $validHeight === false) 
		{
			$height = round($this->info['height'] / ($this->info['width'] / $width));
			$this->eventLog('Height is invalid, assumed ' . $height, __FILE__, __LINE__);
		}
		else
		{
			$width = round($width);
			$height = round($height);
		}
		
		$newImage = imagecreatetruecolor($width, $height);
		
		$averageWidth = $this->info['width'] / $width;
		$averageHeight = $this->info['height'] / $height;
		
		if($averageWidth > $averageHeight) 
		{
			$newWidth = $this->info['width'] / $averageHeight;
        	$x = $newWidth / 2 - $width / 2;
        	imagecopyresampled($newImage, $this->image, -$x, 0, 0, 0, $newWidth, $height, $this->info['width'], $this->info['height']);
		} 
		else
		{
			$newHeight = $this->info['height'] / $averageWidth;
			$y = $newHeight / 2 - $height / 2;
			imagecopyresampled($newImage, $this->image, 0, -$y, 0, 0, $width, $newHeight, $this->info['width'], $this->info['height']);
		} 
		
		$this->image = $newImage;
		$this->info['width'] = $width;
		$this->info['height'] = $height;
		
		$this->eventLog('The image was resized to ' . $width . 'x' . $height, __FILE__, __LINE__);
		
		return true;
	}
	
	
	
	
	/**
	 * Crops the image to specified size with the specified coordinates
	 * @param int $width Width of resultant image
	 * @param int $height Height of resultant image
	 * @param int $x Coordinate x
	 * @param int $y Coordinate y
	 * @return boolean true on success and false on errors
	 */
	 
	public function cropImage($width = 0, $height = 0, $x = 0, $y = 0)
	{
		if(is_resource($this->image) === false)
		{
			$this->eventLog('No picture was uploaded', __FILE__, __LINE__);
			return false;
		}
		
		$validWidth = (is_numeric($width) === true && $width > 0);
		$validHeight = (is_numeric($height) === true && $height > 0);
		
		if($validWidth  === false && $validHeight === false) 
		{
			$this->eventLog($width . '/' . $height . ' is not a valid dimension', __FILE__, __LINE__);
			return false;
		}
		elseif($validWidth  === false && $validHeight === true) 
		{
			$width = round($this->info['width'] / ($this->info['height'] / $height));
			$this->eventLog('Width is invalid, assumed ' . $width, __FILE__, __LINE__);
		}
		elseif($validWidth  === true && $validHeight === false) 
		{
			$height = round($this->info['height'] / ($this->info['width'] / $width));
			$this->eventLog('Height is invalid, assumed ' . $height, __FILE__, __LINE__);
		}
		else
		{
			$width = round($width);
			$height = round($height);
		}
		
		if(is_numeric($x) === false || is_numeric($y) === false)
		{
			$this->eventLog($x . ', ' . $y . ' is not a valid coordinates', __FILE__, __LINE__);
			return false;
		}
		
		$newImage = imagecreatetruecolor($width, $height);
		
		imagecopyresampled($newImage, $this->image, 0, 0, $x, $y, $width, $height, $width, $height);
		
		$this->image = $newImage;
		$this->info['width'] = $width;
		$this->info['height'] = $height;
		
		$this->eventLog('The image was cropped', __FILE__, __LINE__);
		
		return true;
	}
	
	
	
	
	/**
	 * A complete function designed to simplify the operations
	 * @param int $width Width to resize
	 * @param int $height Height to resize
	 * @param bool $show If true, show the image on browser; if false, save the image on path
	 * @param bool $reloadImage Return the image to the initial state
	 * @param string $path Path to save the image; if false, the path is used is defined in property defaultPath
	 * @param int $radius Adds a rounded edge to image
	 * @param string $extension Extension to save the image
	 * @return mixed The image name on sucess or false on errors
	 */
	
	public function resizeAndSave($width = 0, $height = 0, $radius = 0, $transparent = true, $show = false, $path = false, $extension = false, $reloadImage = false, $prepend = '', $fixName = false)
	{
		if(is_resource($this->image) === false)
		{
			$this->eventLog('No picture was uploaded', __FILE__, __LINE__);
			return false;
		}
		
		if($this->resizeImage($width, $height) === false)
		{
			return false;
		}
		
		if(is_numeric($radius) === true && $radius > 0)
		{
			if($this->borderRadius($radius, $transparent) === false)
			{
				return false;
			}
		}
		
		$imagename = $this->saveImage($show, $path, $extension, $prepend, $fixName);
		
		if($imagename === false)
		{
			return false;
		}
		
		if($reloadImage !== false)
		{
			$this->reloadImage();
		}
		
		$this->eventLog('The image was resized and saved successfully', __FILE__, __LINE__);
		
		return array($imagename, $this->info['width'], $this->info['height']);
	}
	
	
	
	
	/**
	 * Adds a rounded border to image
	 * Based on the original script located in http://911-need-code-help.blogspot.com/2009/05/generate-images-with-round-corners-on.html
	 * @param int $radius The size of the border
	 * @param boolean $transparent Defines if the image will have a transparent background (png/gif only)
	 * @return boolean true on success and false on errors
	 */
	
	public function borderRadius($radius = 10, $transparent = true)
	{
		if(is_resource($this->image) === false)
		{
			$this->eventLog('No picture was uploaded', __FILE__, __LINE__);
			return false;
		}
		
		if(is_numeric($radius) === false || $radius <= 0)
		{
			$this->eventLog('$radius must be greater than zero', __FILE__, __LINE__);
			return false;
		}
		
		$half = $radius / 2;
		$position = $radius + 3;
		
		// corners
		imagearc($this->image, $half, $half, $position, $position, 180, -90, $this->bgColor); 
		imagearc($this->image, $half, $this->info['height'] - $half - 1, $position, $position, 90, 180, $this->bgColor); 
		imagearc($this->image, $this->info['width'] - $half - 1, $this->info['height'] - $half - 1, $position, $position, 0, 90, $this->bgColor); 
		imagearc($this->image, $this->info['width'] - $half - 1, $half, $position, $position, 270, 0, $this->bgColor);
		
		// fill
		imagefilltoborder($this->image, 0, 0, $this->bgColor, $this->bgColor); 
		imagefilltoborder($this->image, $this->info['width'], $this->info['height'], $this->bgColor, $this->bgColor); 
		imagefilltoborder($this->image, 0, $this->info['height'], $this->bgColor, $this->bgColor); 
		imagefilltoborder($this->image, $this->info['width'], 0, $this->bgColor, $this->bgColor); 
		
		if($transparent === true)
		{ 
			imagecolortransparent($this->image, $this->bgColor); 
		} 
		
		$this->eventLog('The image had yours corners rounded in ' . $radius . 'px', __FILE__, __LINE__);
		
		return true;
	}
	
	
	
	
	/**
	 * Applies a filter to an image
	 * @param int $filter Filter to be applied
	 * @param string $path Path to save the image; if false, the path is used is defined in property defaultPath
	 * @param mixed $param1 Parameter to apply to the filter
	 * @param mixed $param2 Parameter to apply to the filter
	 * @param mixed $param3 Parameter to apply to the filter
	 * @param mixed $param4 Parameter to apply to the filter
	 * @return boolean true on success and false on errors
	 */
	 
	public function performFilter($filter, $param1 = NULL, $param2 = NULL, $param3 = NULL, $param4 = NULL)
	{
		if(is_resource($this->image) === false)
		{
			$this->eventLog('No picture was uploaded', __FILE__, __LINE__);
			return false;
		}
		
		switch($filter)
		{
			case IMG_FILTER_NEGATE:
			case IMG_FILTER_GRAYSCALE:
			case IMG_FILTER_EDGEDETECT:
			case IMG_FILTER_EMBOSS:
			case IMG_FILTER_GAUSSIAN_BLUR:
			case IMG_FILTER_SELECTIVE_BLUR:
			case IMG_FILTER_MEAN_REMOVAL:
				return @imagefilter($this->image, $filter);
					break;
			case IMG_FILTER_BRIGHTNESS:
			case IMG_FILTER_CONTRAST:
			case IMG_FILTER_SMOOTH:
				return @imagefilter($this->image, $filter, $param1);
					break;
			case IMG_FILTER_COLORIZE:
				return @imagefilter($this->image, $filter, $param1, $param2, $param3, $param4);
					break;
			default:
				$this->eventLog('Invalid filter', __FILE__, __LINE__);
				return false;
		}
	}
	
	
	
	
	/**
	 * Rotates the image
	 * @param int $angle Angle to rotate
	 * @return boolean true on success and false on errors
	 */
		
	public function rotateImage($angle)
	{
		if(is_resource($this->image) === false)
		{
			$this->eventLog('No picture was uploaded', __FILE__, __LINE__);
			return false;
		}
		
		if(is_numeric($angle) === false)
		{
			$this->eventLog('Invalid paramenter ($angle)', __FILE__, __LINE__);
			return false;
		}
		
		$this->image = imagerotate($this->image, $angle, $this->bgColor);
		
		return true;
	}
	
	
	
	
	/**
	 * Saves the image on path or show the image on browser
	 * @param bool $show If true, show the image on browser; if false, save the image on path
	 * @param string $path Path to save the image; if false, the path is used is defined in property defaultPath
	 * @param string $extension Extension to save the image
	 * @return mixed The filename on sucess or false on error
	 */
		
	public function saveImage($show = false, $path = false, $extension = false, $prepend = '', $fixName = false)
	{
		if(is_resource($this->image) === false)
		{
			$this->eventLog('No picture was uploaded', __FILE__, __LINE__);
			return false;
		}
		
		if(empty($path) === true)
		{
			if($this->defaultPath === false)
			{
				$this->eventLog('Default path is undefined', __FILE__, __LINE__);
				return false;
			}
			else
			{
				$path = $this->defaultPath;
			}
		}
		
		if($extension === false)
		{
			$extension = $this->info['extension'];
		}
		
		$imagename = $this->getImageName($extension, $prepend, $fixName);
		
		$path .= $imagename;
		
		if($extension == 'jpg' || $extension == 'jpeg' || $extension == 'bmp')
		{
			if($show === false)
			{
				if(@imagejpeg($this->image, $path, $this->quality) === false)
				{
					$this->eventLog('An error occurred while save the image', __FILE__, __LINE__);
					return false;
				}
			}
			else
			{
				header('Content-type: image/jpeg');
				@imagejpeg($this->image, NULL, $this->quality);
				exit();
			}
		}
		elseif($extension == 'png')
		{
			if($show === false)
			{
				if(@imagepng($this->image, $path) === false)
				{
					$this->eventLog('An error occurred while save the image', __FILE__, __LINE__);
					return false;
				}
			}
			else
			{
				header('Content-type: image/png');
				@imagepng($this->image);
				exit();
			}
		}
		elseif($extension == 'gif')
		{
			if($show === false)
			{
				if(@imagegif($this->image, $path) === false)
				{
					$this->eventLog('An error occurred while save the image', __FILE__, __LINE__);
					return false;
				}
			}
			else
			{
				header('Content-type: image/gif');
				@imagegif($this->image);
				exit();
			}
		}
		else
		{
			$this->eventLog('Invalid extension', __FILE__, __LINE__);
			return false;
		}
		
		$this->eventLog('The image was successfully saved in "' . $path . '"', __FILE__, __LINE__);
		
		return $imagename;
	}
	
	
	
	
}

?>