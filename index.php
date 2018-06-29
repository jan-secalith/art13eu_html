<?php

$tmpLang = filter_var($_GET['lang'],FILTER_SANITIZE_STRING,[FILTER_FLAG_STRIP_BACKTICK]);

$lang=(isset($tmpLang)&&!empty($tmpLang)&&is_dir(sprintf("./%s",$tmpLang)))
    ?$tmpLang
    :'pl'
;

require_once sprintf("./%s/index.php",$lang);