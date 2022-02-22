<?php
	
    function checkValidString($arr){
        $after = 'after';
        $before = 'before';
        if(empty($arr)){
            return true;
        }else if (strpos($arr, $after) === false && strlen($arr) > 50 ) {
            return true;
        } else if(strpos($arr, $after) === false && strpos($arr, $before) !== false){
            return true;
        }else{
            return false;
        }
    }
    
     function printResult(){
        $textNumberOne = 'English is a West Germanic language that was first spoken in early medieval England and is now the third most widespread native language in the world, after Standard Chinese and Spanish, as well as the most widely spoken Germanic language. Named after the Angles, one of the Germanic tribes that migrated to England, it ultimately derives its name from the Anglia (Angeln) peninsula in the Baltic Sea';
        $textNumberTwo = 'Modern English grammar is the result of a gradual change from a typical Indo-European dependent marking pattern with a rich inflectional morphology and relatively free word order';
        if($this->checkValidString($textNumberOne) === true){
            echo("Chuỗi  hợp lệ ");
        }else{
            echo("Chuỗi không hợp lệ ");
        }

        if($this->checkValidString($textNumberTwo) === true){
            echo("Chuỗi  hợp lệ ");
        }else{
            echo("Chuỗi không hợp lệ");
        }
    }
 
    ?>
 