<?php

include  "gorunum/GORUNUM.php";
include  "kontrolcu/kontrolcu.php";


if(isset($_GET["url"]))
{




   $url= $_GET["url"];

   
switch($url)
   {  //not : ?url=blog/yeni/kaydet çalışırsa blog_kaydet() fonksiyonu çalışır. 
      //kontrolcu.php dosyasında bu caselerin fonksiyonun  içeriği vardır. 
      case "anasayfa"                         : anasayfa(); break;      
      case "blog"                             : blog(); break;
      case "blog/yeni"                        : blog_yeni(); break;
      case "blog/yeni/kaydet"                 : blog_kaydet(); break;  
      case "blog/goster"                      : tek_blog(); break;
      


      default                                 : anasayfa(); 

   }


}

else 

{

        hata("url değeri boş veya tanımlı değil");

}

?>