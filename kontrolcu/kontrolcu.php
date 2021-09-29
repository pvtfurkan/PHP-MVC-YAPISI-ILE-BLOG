<?php

include "vt_islem/VT_ISLEM.php";


function anasayfa()
{
    ozel_goster("anasayfa.php",'Anasayfa',"");
}

function blog()
{
  
    $bloglar=tum_bloglari_cek();   //fonksiyonun döndürdüğü değişkeni fonksiyona tanımlama

    ozel_goster("blog.php","Blog",$bloglar);
}

function tek_blog() //tek blog gösteren function
{   
    $id= $_GET["id"]; //urldeki id değeri get ile yakalanır. $id değişkenine bu değer atandı.

    $blog=tek_blog_cek($id);

    ozel_goster("tek_blog.php","",$blog);
}

function blog_yeni()  //yeni blogu kısmının içeriğini sağlayan function
{
    ozel_goster("blog_form.php", "Blog","");
}

function blog_kaydet() //yeni blogdan veriyi veri tabanına kaydeden function
{
    if(!empty($_POST["konu"]) && !empty($_POST["icerik"]))
    {
       $id= blog_insert();

       header("location:?url=blog/goster&id=".$id);  //header ile blog/goster kısmına yönlendiriyoruz ki kullanıcı veriyi sitede görebilsin
       
    }  
    else
    {

        hata("Konu ve içerik alanları boş bırakılamaz!");

    }
}


?> 