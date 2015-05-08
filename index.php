<?php
/*************************************************

Encipher - the PHP code encode tool
Author: Jacky Yu <jacky325@qq.com>
Copyright (c): 2012-2015 Jacky Yu, All rights reserved
Version: 1.0.0

* This library is free software; you can redistribute it and/or modify it.
* You may contact the author of Encipher by e-mail at: jacky325@qq.com

The latest version of Encipher can be obtained from:
https://github.com/uniqid/encipher

*************************************************/

$app = str_replace('\\', '/', dirname(__FILE__));
require_once($app . '/lib/encipher.min.php');

$original = $app . '/original'; 
$encoded  = $app . '/encoded'; 

$encipher = new Encipher($original, $encoded);
$encipher->advancedEncryption = true;
$encipher->comments = array(
    'Encipher - the PHP code encode tool',
    'Author: Jacky Yu <jacky325@qq.com>',
    'Copyright (c): 2012-2015 Jacky Yu, All rights reserved',
    'Version: 1.0.0',
    '',
    '* This library is free software; you can redistribute it and/or modify it.',
    '* You may contact the author of Encipher by e-mail at: jacky325@qq.com',
    '',
    'The latest version of Encipher can be obtained from:',
    'https://github.com/uniqid/encipher'
);

$encipher->encode();
