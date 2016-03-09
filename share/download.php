<?php

$q = $_GET["q"];



if ($q == 1){

header('Content-disposition: attachment; filename=fb_share_project10_lostit.jpg');
header('Content-type: image');
readfile('assets/images/graphics/fb_share_project10_lostit.jpg');

} 

else if ($q == 2)

{

header('Content-disposition: attachment; filename=fb_share_project10_builtit.jpg');
header('Content-type: image');
readfile('assets/images/graphics/fb_share_project10_builtit.jpg');

} 

else if ($q == 3)

{
header('Content-disposition: attachment; filename=fb_share_project10_generic.png');
header('Content-type: image');
readfile('assets/images/graphics/fb_share_project10_generic.png');

}

else if ($q == 4)

{
header('Content-disposition: attachment; filename=fb_cover_project10_lostit.jpg');
header('Content-type: image');
readfile('assets/images/graphics/fb_cover_project10_lostit.jpg');
}

else if ($q == 5)

{
header('Content-disposition: attachment; filename=fb_cover_project10_builtit.jpg');
header('Content-type: image');
readfile('assets/images/graphics/fb_cover_project10_builtit.jpg');
}

else if ($q == 6)

{
header('Content-disposition: attachment; filename=fb_cover_project10_generic.jpg');
header('Content-type: image');
readfile('assets/images/graphics/fb_cover_project10_generic.jpg');
}

else if ($q == 7)

{
header('Content-disposition: attachment; filename=twitter_project10_lostit_v3.jpg');
header('Content-type: image');
readfile('assets/images/graphics/twitter_project10_lostit_v3.jpg');
}

else if ($q == 8)

{
header('Content-disposition: attachment; filename=twitter_project10_builtit_v3.jpg');
header('Content-type: image');
readfile('assets/images/graphics/twitter_project10_builtit_v3.jpg');
}

else if ($q == 9)

{
header('Content-disposition: attachment; filename=twitter_project10_generic_v3.jpg');
header('Content-type: image');
readfile('assets/images/graphics/twitter_project10_generic_v3.jpg');
}

else 

{

}






?> 


