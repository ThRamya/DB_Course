<?php
include("../../variable_handling.php");//if file not found--> it gives warning,script will continue.
include_once("basic.php");//if file not found--> it gives warning,script will continue.If same file included multiple times → Loads only once.
require("../../function.php");//If file not found → Fatal Error,Script will stop execution
require_once("../../stringfunction.php")
//require_once();//If file not found → Fatal Error, Script will stop, If same file repeated → Loads only once
//we can repeat the same file in include() and require().But it will include the file again and again every time you call it.
//but it may cause redeclaration errors. To avoid that, we use include_once() or require_once().
// ?><a href="E_form_validate.php?id=45" target="_blank">click here</a>

