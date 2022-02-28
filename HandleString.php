<?php

 class HandleString 
 {
 	public $check1;
 	public $check2;
 	


 	function setreadFile($n){
 		$readFile = readFile("$n");

 		$checkValidate = $this->checkValidString($readFile);
 		if($checkValidate == true){
 			echo("<br/>File hợp lệ <br/> <br/>");

 			if($n == 'file1.txt'){ 
 				$check1 = true;
 			}
 			if($n == 'file2.txt'){
 				$check2 = true;
 			}
 		}
 		else{	
 			echo("<br/>File không hợp lệ<br/><br/>");
 			if($n == 'file1.txt'){
 				$check1 = false;
 			}
 			if($n == 'file2.txt'){
 				$check2 = false;
 			}
 		}
 	}


function checkValidString($arr) {
    $after = 'after';
    $before = 'before';
    
    if(empty($arr)) {
        return true;
    } else {
        if (strpos($arr, $after) === false && (strlen($arr) > 50 || strpos($arr, $before) !== false)) {
            return true;
        } else {
            return false;
        }
    }
}
 }
 $object1 = new HandleString();
 $object1->setreadFile('file1.txt');
 $object2 = new HandleString();
 $object2->setreadFile('file2.txt');



