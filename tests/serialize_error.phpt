--TEST--
Protocol Buffers serializeToString() throws Exception if required field not set
--SKIPIF--
<?php require 'skipif.inc' ?>
--FILE--
<?php
require 'test.inc';

$bar = new Bar();

try {
	$bar->serializeToString();
} catch (Exception $ex) {
	var_dump($ex->getMessage());
}
?>
--EXPECTF--
%s
