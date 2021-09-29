<article class="blog_article">
    <header>
        <h3><a href="?url=blog/goster&id=<?php echo $icerik["ID"] ?>">?php echo $icerik["KONU"] ?></a></h3><header>
        <div class="blog_icerik">
            <?php echo n12br($icerik["ICERIK"]); ?>
        </div>
        <footer>
            <div class="tarih"><?php echo date("d-m-Y H;i" , $icerik["TARIH"]) ?></div>
            <div class="yorum_adet"> Yorum sayısı</div>
            <div class="clear"></div>
        </footer>
</article>
