<?php
 
header ('Content-type: text/html; charset=utf-8');
 
require "php/Handler.php";
 
$handler = new Handler();
 
if($_POST){
  echo $handler->insert(TABLENAME, "`nickname`, `comment`", array($_POST['nickname'], $_POST['comment']));
  exit;
}
 
$sql = "SELECT nickname, comment FROM comment ORDER BY id DESC";
 
$comments = $handler->select($sql);
?>
<!doctype html>
<html>
<head>
 
 
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/comments.js"></script>
 
<style>
p{
    margin: 0;
    padding: 3px;
}
    input#nickname{
        width: 500px;
    }
    textarea {
        width: 500px;
    }
    input#commentbutton{
        width: 510px;
    }
    .span{
        background-color:#40ce75; 
    font-weight:bold;
    font-size:19px;
    padding:0 7px 0 7px;
    border-radius:5px;
    }
</style>
</head>
 
<body>
  <div id="commentsdiv" style="margin: 133px auto; width:500px;">
    <span id="comments">Комментарии</span>
    
        <form id="form">
      <p><input id="nickname" value="" name="nickname" type="text"/></p>
      <p><textarea id="comment" name="comment" rows="3"></textarea></p>
      <input id="commentbutton" type="submit" style="background-color: #6893f4;" value="Оставить комментарий"/>
    </form>
 
 
  <ul id="commentslist" style="width:500px;margin:20px 0;padding: 0;">
    <?php
    
    foreach ($comments as $row){
      echo "<li><span class='span'>".$row['nickname'].
        "</span><p>".$row['comment']."</p></li><hr>"; 
    }
 
    ?>
  </ul>
  
  
</div>
 
</body></html>