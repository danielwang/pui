 <?php
 //run 'php release.php v3.x.x' in terminal
 $v = $argv[1];
 // create folder for the release version
 $dir= '../dist/' . $v;
 mkdir($dir, 0777, true);

 // generate minified gel.css output to dist dir
 include_once("vendor/minifier.php");
 $css = array(
     "css/gel-scoped.css" => "css/gel-scoped.min.css",
     "css/gel.css" => "css/gel.min.css"
 );
 echo "******** starting ******** \n";
 minifyCSS($css);

 // copy files to dist
 $cssSrc = "css";
 $jsSrc = "js";
 $imagesSrc = "images";
 $dest = $dir;
 shell_exec("cp -r $cssSrc $dest");
 echo "Copying CSS  \n";
 shell_exec("cp -r $jsSrc $dest");
 echo "Copying JS  \n";
 shell_exec("cp -r $imagesSrc $dest");
 echo "Copying images  \n";
 echo "****************** release " . $v . " has finished ******************  \n";
 ?>
