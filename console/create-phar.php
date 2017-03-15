<?php
$srcRoot   = "./src";
$buildRoot = "./build";
$fileName  = "console.phar";

try {
    $phar = new Phar($buildRoot.'/'.$fileName, FilesystemIterator::CURRENT_AS_FILEINFO | FilesystemIterator::KEY_AS_FILENAME, $fileName);
    $phar->buildFromDirectory($srcRoot);
    $phar->compressFiles(Phar::BZ2);

    $stub = file_get_contents('stub.php');
    $phar->setStub(str_replace("\r\n", "\n", $stub));

    echo '[ OK ] archive '.$buildRoot.'/'.$fileName." created.\n\r";
} catch (UnexpectedValueException $e) {
    echo '[FAIL] '.$e->getMessage()."\n\r";
}
