<?php

$dir = 'content';
$dir2 = 'content/uploads';

// create new directory with 744 permissions if it does not exist yet
// owner will be the user/group the PHP script is run under
if ( !file_exists($dir) ) {
    $oldmask = umask(0);  // helpful when used in linux server
    mkdir ($dir, 0744);
}
if ( !file_exists($dir2) ) {
    $oldmask = umask(0);  // helpful when used in linux server
    mkdir ($dir2, 0744);
}

?>
