<?php

$vt= new mysqli("localhost","root","","fk_blog");
$vt->set_charset("UTF8");



function tum_bloglari_cek()
{
    global $vt;    //$vt bir global değişkendir. İçeri çekmek için global $vt olarak tanımlarız.

    $ham         = $vt->query("SELECT * FROM blog ORDER BY ID DESC");  //blog tablosundan, en son yazılan blog yukarda olacak şekilde veriyi çek komutu.

    $bloglar     = $ham->fetch_all(1);   //fetch_all ile bütün satır verileri diziye çevrilmiş halde bize  döndürmesini sağlar.

    return $bloglar; 

}

function tek_blog_cek($id)
{
    global $vt;
    $ham        = $vt->query("SELECT * FROM blog WHERE ID='$id' ");  //fonksiyondaki $id parametresi veritabanındaki ID'ye tanımlandı
    $blog       = $ham->fetch_assoc();   //fetch $ham daki değerleri çeker
 
    return $blog;
}

function blog_insert()
{
    global $vt;

    $konu     = htmlentities($_POST["konu"],ENT_QUOTES);
    $icerik   = htmlentities($_POST["icerik"],ENT_QUOTES);  //TEK VE ÇİFT TIRNAK Kullanımını sağlar


    $vt->query("INSERT INTO blog (KONU,ICERIK,TARIH) VALUES ('$konu','$icerik','".time()."') ") or die("Blog veri tabanına kayıt edilirken hata oluştu<br/>".$vt->error);

    return $vt->insert_id;   //kullanıcı blogun eklendiğini görmesi için blogun id'si dönmelidir.


}
?>