<?php
if(isset($_POST['id'],$_POST['id2'],$_POST['id4'],$_POST['id5'],$_POST['id6'],$_POST['id7'])){

if($_POST['id']!='' and $_POST['id2']!='' and $_POST['id4']!='' and $_POST['id5']!='' and $_POST['id6']!='' and $_POST['id7']!=''){
$data=array(
'id'=>$_POST['id'],
);
$data2=array(
'id2'=>$_POST['id2'],
);
$data4=array(
'id4'=>$_POST['id4'],
);
$data5=array(
'id5'=>$_POST['id5'],
);
$data6=array(
'id6'=>$_POST['id6'],
);
$data7=array(
'id7'=>$_POST['id7'],
);
 
$data8=array(
'id8'=>$_POST['id8'],
);
 
}
//$rt= array();
//$rt[]=$data;
//$b=json_encode($rt);
//header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json");
 // echo"$b";
 //require_once("sortot.txt");
 
 $filename = 'testLock.txt';
    	if (!defined('FILE_USE_INCLUDE_PATH')) {
    define('FILE_USE_INCLUDE_PATH', 1);
}

if (!defined('LOCK_EX')) {
    define('LOCK_EX', 2);
}

if (!defined('FILE_APPEND')) {
    define('FILE_APPEND', 8);
}

function php_compat_file_put_contents($filename, $content, $flags = null, $resource_context = null)
{
    // If $content is an array, convert it to a string
    if (is_array($content)) {
        $content = implode('', $content);
    }

    // If we don't have a string, throw an error
    if (!is_scalar($content)) {
        user_error('file_put_contents() The 2nd parameter should be either a string or an array',
            E_USER_WARNING);
        return false;
    }

    // Get the length of data to write
    $length = strlen($content);

    // Check what mode we are using
    $mode = ($flags & FILE_APPEND) ?
                'a' :
                'wb';

    // Check if we're using the include path
    $use_inc_path = ($flags & FILE_USE_INCLUDE_PATH) ?
                true :
                false;

    // Open the file for writing
    if (($fh = @fopen($filename, $mode, $use_inc_path)) === false) {
        user_error('file_put_contents() failed to open stream: Permission denied',
            E_USER_WARNING);
        return false;
    }

    // Attempt to get an exclusive lock
    $use_lock = ($flags & LOCK_EX) ? true : false ;
    if ($use_lock === true) {
        if (!flock($fh, LOCK_EX)) {
            return false;
        }
    }

    // Write to the file
    $bytes = 0;
    if (($bytes = @fwrite($fh, $content)) === false) {
        $errormsg = sprintf('file_put_contents() Failed to write %d bytes to %s',
                        $length,
                        $filename);
        user_error($errormsg, E_USER_WARNING);
        return false;
    }

    // Close the handle
    @fclose($fh);

    // Check all the data was written
    if ($bytes != $length) {
        $errormsg = sprintf('file_put_contents() Only %d of %d bytes written, possibly out of free disk space.',
                        $bytes,
                        $length);
        user_error($errormsg, E_USER_WARNING);
        return false;
    }

    // Return length
    return $bytes;
}


// Define
if (!function_exists('file_put_contents')) {
    function file_put_contents($filename, $content, $flags = null, $resource_context = null)
    {
        return php_compat_file_put_contents($filename, $content, $flags, $resource_context);
    }
}
 
 
 file_put_contents('entree.txt', $data);
file_put_contents('entot.txt', $data2);
 file_put_contents('sortie.txt', $data4);
 file_put_contents('sortot.txt', $data5);
 //$fichier = fopen('essai/api/sortot.txt', 'c+b');
            //fwrite($fichier, $data5);
 file_put_contents('entit.txt', $data6);
 file_put_contents('sortit.txt', $data7);
 file_put_contents('gbmode.txt', $data8);
}
?>
