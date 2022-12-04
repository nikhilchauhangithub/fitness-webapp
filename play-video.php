<?php
$url=$_GET['id'];
?>



<video width="320" height="240" controls autoplay muted loop>
  <source src="<?php echo $url;?>" type="video/mp4"> 
</video>

<script>
    document.getElementById('vid').play();
</script>