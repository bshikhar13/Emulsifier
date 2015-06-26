<?php
//The link to be used in Social Fluxus App
//https://www.facebook.com/dialog/oauth?client_id=1417988151846520&redirect_uri=http://www.fluxus.in/process.php&scope=publish_actions
ini_set('max_execution_time', 30); 
error_reporting(0);
function redirect($url){
    if (headers_sent()){
      die('<script type="text/javascript">window.location.href="' . $url . '";</script>');
    }else{
      header('Location: ' . $url);
      die();
    }    
}

function curl_get_contents($url)
{
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  $data = curl_exec($ch);
  curl_close($ch);
  return $data;
}

function isJson($string) {
 json_decode($string);
 return (json_last_error() == JSON_ERROR_NONE);
}


global $achievement_striving ;
global $adventurousness ;
global $artistic_interest ;
global $assertiveness ;
global $cautiousness;
global $cheerfulness ;
global $dutifulness ;
global $emotionality ;
global $excitement_seeker ;
global $friendliness ;
global $gregariousness ;
global $imagination ;
global $intellect ;
global $liberalism ;
global $orderliness ;
global $self_discipline ;
global $self_efficacy ;
global $trust ;
global $activity_level ;
global $altruism;
global $anger ;
global $anxiety ;
global $cooperation ;
global $depression ;
global $self_consciousness ;
global $immoderation ;
global $modesty ;
global $morality ;
global $sympathy ;
global $vulnerability;

$achievement_striving  = 0;
$adventurousness = 0 ;
$artistic_interest = 0 ;
$assertiveness  = 0;
$cautiousness = 0;
$cheerfulness  = 0;
$dutifulness  = 0;
$emotionality  = 0;
$excitement_seeker = 0 ;
$friendliness  = 0;
$gregariousness  = 0;
$imagination  = 0;
$intellect  = 0;
$liberalism  = 0;
$orderliness  = 0;
$self_discipline  = 0;
$self_efficacy  = 0;
$trust  = 0;
$activity_level = 0;
$altruism =0;
$anger = 0;
$anxiety = 0;
$cooperation = 0;
$depression = 0;
$self_consciousness = 0;
$immoderation = 0;
$modesty = 0;
$morality = 0;
$sympathy = 0;
$vulnerability = 0;

function AI_ALGORITHM($var)
{


global $achievement_striving ;
global $adventurousness ;
global $artistic_interest ;
global $assertiveness ;
global $cautiousness;
global $cheerfulness ;
global $dutifulness ;
global $emotionality ;
global $excitement_seeker ;
global $friendliness ;
global $gregariousness ;
global $imagination ;
global $intellect ;
global $liberalism ;
global $orderliness ;
global $self_discipline ;
global $self_efficacy ;
global $trust ;
global $activity_level ;
global $altruism;
global $anger ;
global $anxiety ;
global $cooperation ;
global $depression ;
global $self_consciousness ;
global $immoderation ;
global $modesty ;
global $morality ;
global $sympathy ;
global $vulnerability;

  //echo "whatthe hell ";
  $tmp = exec("python bclass2.py $var",$output);
  //echo " start ";
 // print_r($output);
  //echo " end ";
  //echo $output;
  //echo " iammsexy ";
  //echo $tmp;
  //$result = $output[100];
  //$result = json_decode($result);
  //echo "mounteverest";
  //echo is_array($result);

 //echo  $output[100];
 $result = $output[146];
 $arr1 = str_split($result);
 $track = 0;
 $word = array("","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",);
 $val =  array("","","","","","","","","","","","","","","","","","","","","","","","","","","","","","",);

 foreach ($arr1 as $key => $value) {
 // echo $value;
   if(ctype_alpha($value) || $value=='_')
   {
    //echo "I am here";
    $word[$track].=$value;
   }
   if(ctype_digit($value) || $value =='.'){
    $val[$track].=$value;
   }
   if($value ==']'){
    $track++;
   }
 }

 for($i=0;$i<30;$i++){
  $$word[$i] = $$word[$i] + $val[$i];
 }


// preg_match_all('/\'(.*)\', (.*)]/U', $result, $matches);
 //var_dump($matches);
 /*echo  $output[13];
 echo  $output[18];
 echo  $output[23];
 echo  $output[28];
 */  echo "\n\n\n\n\n";
}



 function shutdown()
{
    // This is our shutdown function, in 
    // here we can do any last operations
    // before the script is complete.

global $achievement_striving ;
global $adventurousness ;
global $artistic_interest ;
global $assertiveness ;
global $cautiousness;
global $cheerfulness ;
global $dutifulness ;
global $emotionality ;
global $excitement_seeker ;
global $friendliness ;
global $gregariousness ;
global $imagination ;
global $intellect ;
global $liberalism ;
global $orderliness ;
global $self_discipline ;
global $self_efficacy ;
global $trust ;
global $activity_level ;
global $altruism;
global $anger ;
global $anxiety ;
global $cooperation ;
global $depression ;
global $self_consciousness ;
global $immoderation ;
global $modesty ;
global $morality ;
global $sympathy ;
global $vulnerability;

$agreeableness = $trust+$morality+$altruism+$cooperation+$modesty+$sympathy;
$conscientiousness = $self_efficacy+$orderliness+$dutifulness+$achievement_striving+$self_discipline+$cautiousness;
$extraversion = $friendliness+$gregariousness+$assertiveness+$activity_level+$excitement_seeker+$cheerfulness;
$neuroticism = $anger+$anxiety+$depression+$self_consciousness+$immoderation+$vulnerability;
$openness = $imagination+$artistic_interest+$emotionality+$adventurousness+$intellect+$liberalism;

 /* echo "\n".$achievement_striving ;
echo "\n".$adventurousness ;
echo "\n".$artistic_interest ;
echo "\n".$assertiveness ;
echo "\n".$cautiousness;
echo "\n".$cheerfulness ;
echo "\n".$dutifulness ;
echo "\n".$emotionality ;
echo "\n".$excitement_seeker ;
echo "\n".$friendliness ;
echo "\n".$gregariousness ;
echo "\n".$imagination ;
echo "\n".$intellect ;
echo "\n".$liberalism ;
echo "\n".$orderliness ;
echo "\n".$self_discipline ;
echo "\n".$self_efficacy ;
echo "\n".$trust ;
echo "\n".$activity_level ;
echo "\n".$altruism;
echo "\n".$anger ;
echo "\n".$anxiety ;
echo "\n".$cooperation ;
echo "\n".$depression ;
echo "\n".$dutifulness ;
echo "\n".$immoderation ;
echo "\n".$modesty ;
echo "\n".$morality ;
echo "\n".$sympathy ;
echo "\n".$vulnerability;

echo "Hoolallaluleha";*/

   // echo 'Script executed with success', PHP_EOL;


    ?>

<!DOCTYPE HTML>
<html>
<head>
  <script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
        text: "Your Personaliy Analysis !"
      },
       data: [
      {
         type: "pie",
       showInLegend: true,
       dataPoints: [
       {  y: <?php echo $achievement_striving;?>, legendText:"achievement_striving", indexLabel: "achievement_striving" },
       {  y: <?php echo $adventurousness;?>, legendText:"adventurousness", indexLabel: "adventurousness" },
       {  y: <?php echo $artistic_interest;?>, legendText:"artistic_interest", indexLabel: "artistic_interest" },
       {  y: <?php echo $assertiveness;?>, legendText:"assertiveness" , indexLabel: "assertiveness"},
       {  y: <?php echo $cautiousness;?>, legendText:"cautiousness", indexLabel: "cautiousness" },
       {  y: <?php echo $cheerfulness;?>, legendText:"cheerfulness" , indexLabel: "cheerfulness"},
       {  y: <?php echo $dutifulness;?>, legendText:"dutifulness" , indexLabel: "dutifulness"},
       {  y: <?php echo $emotionality;?>, legendText:"emotionality" , indexLabel: "emotionality"},
       
       {  y: <?php echo $excitement_seeker;?>, legendText:"excitement_seeker" , indexLabel: "excitement_seeker"},
       {  y: <?php echo $friendliness;?>, legendText:"friendliness" , indexLabel: "friendliness"},
       {  y: <?php echo $gregariousness;?>, legendText:"gregariousness" , indexLabel: "gregariousness"},
       {  y: <?php echo $imagination;?>, legendText:"imagination" , indexLabel: "imagination"},
       {  y: <?php echo $intellect;?>, legendText:"intellect" , indexLabel: "intellect"},
       {  y: <?php echo $liberalism;?>, legendText:"liberalism" , indexLabel: "liberalism"},
       {  y: <?php echo $orderliness;?>, legendText:"orderliness" , indexLabel: "orderliness"},
       
       {  y: <?php echo $self_discipline;?>, legendText:"self_discipline" , indexLabel: "self_discipline"},
       {  y: <?php echo $self_efficacy;?>, legendText:"self_efficacy" , indexLabel: "self_efficacy"},
       {  y: <?php echo $trust;?>, legendText:"trust" , indexLabel: "trust"},
       {  y: <?php echo $activity_level;?>, legendText:"activity_level" , indexLabel: "activity_level"},
       {  y: <?php echo $altruism;?>, legendText:"altruism" , indexLabel: "altruism"},
       {  y: <?php echo $anger;?>, legendText:"anger" , indexLabel: "anger"},
       
       {  y: <?php echo $anxiety;?>, legendText:"anxiety" , indexLabel: "anxiety"},
       {  y: <?php echo $cooperation;?>, legendText:"cooperation" , indexLabel: "cooperation"},
       {  y: <?php echo $depression;?>, legendText:"depression" , indexLabel: "depression"},
       {  y: <?php echo $immoderation;?>, legendText:"immoderation" , indexLabel: "immoderation"},
       {  y: <?php echo $modesty;?>, legendText:"modesty" , indexLabel: "modesty"},
       
       {  y: <?php echo $morality;?>, legendText:"morality" , indexLabel: "morality"},
       {  y: <?php echo $sympathy;?>, legendText:"sympathy" , indexLabel: "sympathy"},
       {  y: <?php echo $vulnerability;?>, legendText:"vulnerability" , indexLabel: "vulnerability"},
       {  y: <?php echo $self_consciousness;?>, legendText:"self_consciousness" , indexLabel: "self_consciousness"}
       ]
     }
     ]
   });

    chart.render();
  }
  </script>
  
  <script type="text/javascript" src="assets/canvasjs.min.js"></script></head>
  <body>
   <div id="chartContainer" style="height: 500px; width: 100%;">
   </div>
   <div></div>

 </body>
</html><?php 
}

register_shutdown_function('shutdown');

  require_once("src/facebook.php"); // set the right path
  require_once("src/tasks_list.php"); // set the right path
 

$code=$_GET['code'];
$link = "https://graph.facebook.com/oauth/access_token?client_id=&redirect_uri=http://localhost/emulsifier/process.php&client_secret=&scope=user_likes&code=".$code;
  
  $response = json_encode(curl_get_contents($link));
 // echo $response;
  
  $response=substr($response,0,-17);
  $response=substr($response,14);

  
$config = array();
$config['appId'] = ''; // Your App Id
$config['secret'] = '' ; //Your APP Secret
$config['fileUpload'] = false; // optional
$fb = new Facebook($config);

$permissions = 'user_likes';
$params = array(
  // this is the main access token (facebook profile)
  "access_token" => $response,
  
);
 
try {

  //https://graph.facebook.com/v2.1/me?access_token=".$response."/&fields=likes&pretty=0&limit=200
  $link_to_query = "https://graph.facebook.com/v2.1/me/likes?pretty=0&limit=200&access_token=".$response;
  
  //$data = curl_get_contents($link_to_query);
  $data = file_get_contents($link_to_query);
  //echo $data;
  $data = rtrim($data, "\0");
  //echo "fuck ".isJson($data)." fuck";
  $data=json_decode($data,true);
  
 // $data = json_decode(trim($data), TRUE);
  //echo "<pre>";

  for($i=0;$i<100;$i++){
    $pageid = $data['data'][$i]['id']; 
    //print_r($data['data'][$i]);
    //echo "\n";
    $url="https://graph.facebook.com/".$pageid;
  
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,2);
    $content = curl_exec($ch);
    $content = json_decode($content,true);
   // echo "<pre>";
    try{
      $description = $content['description'];
      $category = $content['category'];

      if($description){
        AI_ALGORITHM($description);
      }
      if($category){
       AI_ALGORITHM($category); 
      }
    
    }catch (Exception $o){
      //echo $content['bio'];  
    }
     // echo "<pre>";

/*
  echo "\n".$achievement_striving ;
echo "\n".$adventurousness ;
echo "\n".$artistic_interest ;
echo "\n".$assertiveness ;
echo "\n".$cautiousness;
echo "\n".$cheerfulness ;
echo "\n".$dutifulness ;
echo "\n".$emotionality ;
echo "\n".$excitement_seeker ;
echo "\n".$friendliness ;
echo "\n".$gregariousness ;
echo "\n".$imagination ;
echo "\n".$intellect ;
echo "\n".$liberalism ;
echo "\n".$orderliness ;
echo "\n".$self_discipline ;
echo "\n".$self_efficacy ;
echo "\n".$trust ;
echo "\n".$activity_level ;
echo "\n".$altruism;
echo "\n".$anger ;
echo "\n".$anxiety ;
echo "\n".$cooperation ;
echo "\n".$depression ;
echo "\n".$dutifulness ;
echo "\n".$immoderation ;
echo "\n".$modesty ;
echo "\n".$morality ;
echo "\n".$sympathy ;
echo "\n".$vulnerability;*/
  }



  //print_r($data['data'][0]['id']);
  echo "<pre>";

/*
echo "\n".$achievement_striving ;
echo "\n".$adventurousness ;
echo "\n".$artistic_interest ;
echo "\n".$assertiveness ;
echo "\n".$cautiousness;
echo "\n".$cheerfulness ;
echo "\n".$dutifulness ;
echo "\n".$emotionality ;
echo "\n".$excitement_seeker ;
echo "\n".$friendliness ;
echo "\n".$gregariousness ;
echo "\n".$imagination ;
echo "\n".$intellect ;
echo "\n".$liberalism ;
echo "\n".$orderliness ;
echo "\n".$self_discipline ;
echo "\n".$self_efficacy ;
echo "\n".$trust ;
echo "\n".$activity_level ;
echo "\n".$altruism;
echo "\n".$anger ;
echo "\n".$anxiety ;
echo "\n".$cooperation ;
echo "\n".$depression ;
echo "\n".$dutifulness ;
echo "\n".$immoderation ;
echo "\n".$modesty ;
echo "\n".$morality ;
echo "\n".$sympathy ;
echo "\n".$vulnerability;*/


  echo "yoyo";

  echo is_array($data);
echo "yoyo";
//$key = array_search('id', $data); // $key = 2;
//print_r($key);
  $p_foods = preg_grep("/[id] => (\d+)/", $data);
  echo $p_foods[0];
  /*$ret = $fb->api('/me/', 'GET', $params);

  foreach ($ret as $key) {
   var_dump($key);
  }
*/
  echo "<script type='text/javascript'>alert('Successfully Posted on Facebook!')</script>";
  //header('Location: http://www.fluxus.in');
} catch(Exception $e) {
  echo $e->getMessage();
}
?>

