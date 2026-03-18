<?php
//This guy calls the initial page through showPage function in Helloworld.class.php
//MAKE SURE the file-name matches the namespace label used by the entire module in module.xml
//Also, the name called here has to match the class name in Backrooms.class.php
echo FreePBX::create()->Backrooms->showPage();
