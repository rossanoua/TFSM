<?php
//date_default_timezone_set('Europe/Kiev');

function pdump($var, $return = false)
{
    echo '<pre>';
    print_r($var, $return);
    echo '</pre>';
};

function ddump($var)
{
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
};

function countfilelines($thisfile){
    $file=$thisfile;
    $linecount = 0;
    $handle = fopen($file, "r");
    while(!feof($handle)){
        $line = fgets($handle);
        $linecount++;
    }

    fclose($handle);

    return $linecount;

}

function getRemoteIPAddress() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return $_SERVER['HTTP_CLIENT_IP'];

    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    return $_SERVER['REMOTE_ADDR'];
}

function addNew($fileName, $line, $max = 10) {
//    $f = $fileName;
//    $myfile = fopen($f, "w") or die("Unable to open file!");




    // Remove Empty Spaces
    $file = array_filter(array_map("trim", file($fileName)));

    // Make Sure you always have maximum number of lines
    $file = array_slice($file, 0, $max);

    // Remove any extra line
    count($file) >= $max and array_shift($file);

//    $line = iconv("CP1257","UTF-8", $line);
    // Add new Line
    array_push($file, $line);

    // Save Result
    file_put_contents($fileName, implode(PHP_EOL, array_filter($file)));
}

// Number of lines
//$max = 10;
// The file must exist with at least 2 lines on it
//$file = "log.txt";
//addNew($file, 'you additional text HERE' . " : " . date("m.d.Y"), $max);
