<?php
  echo "<h2 style='text-align:center'>". $post->title;
  echo "<br>";
  echo "<img src='./assets/uploads/$post->image'>";
  echo "</h2>";
  echo "<h5 style='margin-left:50px'>". $post->content."</h5>";
?>