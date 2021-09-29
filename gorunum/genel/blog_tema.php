
<article class="blog_article">
      <header>
        <h3><a href="?url=blog/goster&id=<?php echo $blog["ID"] ?>"> <?php echo $blog["KONU"] ?></a></h3>
      <header>
      <div class="blog_icerik">
            <?php echo $blog["ICERIK"] ?>
      </div>
      <footer>
            <div class="tarih"><?php echo date('d.m.Y H:i',$blog["TARIH"]) ?></div>
            <div class="clear"></div>
        </footer>
</article>
