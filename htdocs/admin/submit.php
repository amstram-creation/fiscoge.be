<?php
session_start();

function abort(){
  header('Location: index.php');
}

if($_SERVER["REQUEST_METHOD"] !== 'POST'){
  abort();
}

$filename = $_POST['filename'];
if(!file_exists($filename)){
  abort();
}

$content = trim($_POST['content']);
if(empty($content)){
  abort();
}

$res = file_put_contents($filename, $content);

abort();
