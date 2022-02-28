<?php

 class HandleString 
 {
 	public $check1;
 	public $check2;
 	


 	function setreadFile($n){
 		$readFile = file_get_contents($n);

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


   function checkValidString($arr){
        // $string = 'hello';
        $after = 'after';
        $before = 'before';
        // var_dump((!empty($string) && strpos($string, $after) && strlen($string) > 50));die;
        if (empty($string) || (!empty($string) && strpos($string, $after) && strlen($string) > 50) || (!empty($string) && !strpos($string, $after) && strpos($string, $before))) {
            return true;
        } else {
            return false;
        }
    }
 }
 $object1 = new HandleString();
 $object1->setreadFile('file1.txt');
 $object2 = new HandleString();
 $object2->setreadFile('file2.txt');



