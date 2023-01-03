<?php
    $dir ="gallery/";
      if (is_dir($dir)){
         if ($dh = opendir($dir)){
                 while (($file = readdir($dh)) !== false){
                    if($file=="." OR $file==".."){} else { 
              ?>             
                         <img  style="width: 260px;" src="gallery/<?php echo $file; ?>"> 
             <?php
              }
             }
         closedir($dh);
         }
      } ?>