<?php
define("LOGFILE", 'img.log'); //log file name
define("TREEFILE", 'tree.log'); //log file name
define("IMG_DIR", 'src/'); //image storage directory, as seen from futaba.php
define("THUMB_DIR",'thumb/'); //thumbnail storage directory
define("TITLE", 'Fukurinba BBS'); //title (<title> and TOP)
define("SUBTITLE", 'Fukurinba out of the Box'); //subtitle (appears under title on TOP)
define("NANSHI", 'Toshiaki'); //Name of nameless posters
define("KITA", 'ｷﾀ━━━━━━(ﾟ∀ﾟ)━━━━━━!'); // Text shown if user has entered none
define("CHAGRIN", 'No Subject'); // Subject shown if user has entered none
define ("subject_needed", 0); //Add default subject if none entered?: 1, Don't: 0
define("HOME", './'); //link to "Home
define("MAX_KB", '500'); //posting space limit KB (up to 2M by php setting)
define("MAX_W", '250'); //Post size width (any more than this, reduce width)
define("MAX_H", '250'); //post size height
define("PAGE_DEF", '5'); //posts to display on one page
define("LOG_MAX", '500'); //maximum number of log lines
define("ADMIN_PASS", 'admin_pass'); //admin_pass (CHANGE THIS!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!)
define("RE_COL", '789922'); //color when > is attached, a.k.a the color of Greentext
define("PHP_SELF2", 'index.html'); //name of the html page it builds
define("PHP_EXT", '.html'); //extension after page 1
define("RENZOKU", '5'); //continuous post seconds
define("RENZOKU2", '10'); //number of seconds to post consecutive images
define("MAX_RES", '30'); //number of forced sage responses
define("USE_THUMB", 1); //Make thumbnails: 1, Don't: 0
define("PROXY_CHECK", 0); //Restrict writing of proxy y:1 n:0
define("DISP_ID", 1); //display ID force:2 do:1 not:0
define("BR_CHECK", 15); //Number of lines to suppress line feeds.
define("IDSEED", 'id seed'); //id seed (CHANGE THIS!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!)
define("RESIMG", 0); //Add an image to the resimg:1 Don't add:0/* BBS

$path = realpath("./").'/'.IMG_DIR;
$badstring = array("dummy_string","dummy_string2"); //Text that contains these will be rejected (NG-WORD)
$badfile = array("dummy","dummy2"); //Image md5 rejection
$badip = array("addr.dummy.com","addr2.dummy.com"); //Reject posts from such hosts
$addinfo=''; // This is the little list you see under the upload form. You can add any extra stuff to here.
  ?>
