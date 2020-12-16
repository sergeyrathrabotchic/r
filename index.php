

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head lang="<?php echo $str_language; ?>" xml:lang="<?php echo $str_language; ?>">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>MAMP PRO</title>
<style type="text/css">
    body {
        font-family: Arial, Helvetica, sans-serif;
        font-size: .9em;
        color: #000000;
        background-color: #FFFFFF;
        margin: 0;
        padding: 10px 20px 20px 20px;
    }

    samp {
        font-size: 1.3em;
    }

    a {
        color: #000000;
        background-color: #FFFFFF;
    }

    sup a {
        text-decoration: none;
    }

    hr {
        margin-left: 90px;
        height: 1px;
        color: #000000;
        background-color: #000000;
        border: none;
    }

    #logo {
        margin-bottom: 10px;
        margin-left: 28px;
    }

    .text {
        width: 80%;
        margin-left: 90px;
        line-height: 140%;
    }
</style>
</head>

<body>

<?php



//Привет! Давно не виделись.
 function revertCharacters ($arg){
//'Привет! Давно не виделись.'
$text = $arg;

$str = iconv("UTF-8", "windows-1251", $text);
$arr = array();
foreach (str_split($str) as $index => $value)

{

$a = iconv("windows-1251","UTF-8", $value);
array_push($arr , $a);

}

//echo "<pre>"; print_r($arr); echo "</pre>";





/*$arr = ' gff ';


$arr = str_split($arr);*/

$arr4 = array($arr);


//echo "<pre>"; print_r(($arr[3] == ' ')); echo "</pre>";


$arr2 = array();
$a = 1;
$b = 0;
$c = 1;
for($i1=0;$i1<count($arr);$i1++){
    if($arr[$i1] != ' ' && $arr[$i1] != '.' && $arr[$i1] != ',' && $arr[$i1] != '?' && $arr[$i1] != '!' && $a==1){
    array_push($arr2, array());
    array_push($arr2[$b], $i1);
    $a =0;
    $c = 1;
    } else if ( ($arr[$i1] == ' ' || $arr[$i1] == '.' || $arr[$i1] == ',' || $arr[$i1] == '?'|| $arr[$i1] == '!') && $c==1 && 0<count($arr2)){
        $a = 1;
        array_push($arr2[$b], $i1-1);
        $b++;
        $c = 0;
    } else if ( count($arr) == $i1+1 && $arr[$i1] != ' ' && $arr[$i1] != '.' && $arr[$i1] != ',' && $arr[$i1] != '?' && $arr[$i1] != '!'){
        array_push($arr2[$b], $i1);
    }
}
//cho "<pre>"; print_r($arr); echo "</pre>";
//echo "<pre>"; print_r($arr2); echo "</pre>";


for($i3=0;$i3<count($arr2);$i3++){
$arr3 = array();
for($i1=$arr2[$i3][0];$i1<=$arr2[$i3][1];$i1++){
    array_push($arr3, $arr[$i1]);
}
for($i1=$arr2[$i3][1],$i2=0;$i1>=$arr2[$i3][0];$i1--,$i2++){

    array_splice($arr,$i1,1,$arr3[$i2]);
}
}

//echo "<pre>"; print_r($arr3); echo "</pre>";
//echo "<pre>"; print_r($arr); echo "</pre>";
return implode("", $arr);
}


$result  = revertCharacters ('Привет! Давно не виделись.');
echo $result;

?>
</body>
</html>
