<?php

if (empty($_POST['filename'])) {
    return false;
}

unlink('./tmp/'.$_POST['filename']);

echo "ok";