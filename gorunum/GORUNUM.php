<?php 

function sayfa_goster($src,$title=false,$values=false) //$values i bir array olarak ele alıcaz. Nedeni tekrar tekrar parametre girmeye bir son vermek.
{

    
    include "gorunum/genel/header.php";
    include $src;  //bu değişken olduğu için değişkeni parametre atadık. bunu dahil ederek header ve footeri karıştırmadan ikisinin arasını kodlayabileceğimiz bir alana sahip oluruz
    include "gorunum/genel/footer.php";
}

function genel_goster($src,$title=false, $values=false)
{
    sayfa_goster("gorunum/genel/".$src,$title,$values);   //bunu yazarak sadece dosya adı ile genel klasöründeki dosyalara ulaşabileceğiz. Yalnız $src yazmak artık /gorunum/genel/$src anlamına geldi.
}

function ozel_goster($src,$title=false, $values=false)
{
    sayfa_goster("gorunum/ozel/".$src,$title,$values);
}



function hata($mesaj) 
{
    genel_goster("hata.php","HATA!",$mesaj);

}


?>