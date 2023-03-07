<?php
$id = mysqli_connect("127.0.0.1","root","","wo");
if(isset($_POST['t'],$_POST['id']) AND !empty($_POST['t']) AND !empty($_POST['id'])) {
   $postid = (int) $_POST['id'];
   $postt = (int) $_POST['t'];
   $sessionid = 5;
   $check = $id->prepare('SELECT id FROM articles WHERE id = ?');
   $check->execute(array($postid));
   if($check->rowCount() == 1) {
      if($postt == 1) {
         $check_like = $id->prepare('SELECT id FROM likes WHERE id_article = ? AND id_membre = ?');
         $check_like->execute(array($postid,$sessionid));
         if($check_like->rowCount() == 1) {
            $del = $id->prepare('DELETE FROM likes WHERE id_article = ? AND id_membre = ?');
            $del->execute(array($postid,$sessionid));
         } else {
            $ins = $id->prepare('INSERT INTO likes (id_article, id_membre) VALUES (?, ?)');
            $ins->execute(array($postid, $sessionid));
         }
         
      } elseif($postt == 2) {
         $del = $id->prepare('DELETE FROM likes WHERE id_article = ? AND id_membre = ?');
         $del->execute(array($postid,$sessionid));
         }
      }
      header('produith.php?id='.$postid);
   } 
}