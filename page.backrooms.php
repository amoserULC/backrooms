<?php
//This guy calls the initial page through showPage function in Helloworld.class.php
//MAKE SURE the file-name matches the namespace label used by the entire module in module.xml
echo FreePBX::create()->Helloworld->showPage();
