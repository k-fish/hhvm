<?php
function main(){
        $regexp = '#\[code(?:=([a-z]+))?\](.+\[/code\])#uise';
        $message = '[code=php]unparsed code[/code]';
        $replacement = "emptyfxn('\$1', '\$2')";

        if (preg_match($regexp, $message))
        {
                $message = preg_replace($regexp, $replacement, $message);
                //$bitfield->set($bbcode_data['bbcode_id']);
        }
        return $message;
}


function emptyfxn($a,$b){
        $st = 'Result: '.$a.' , '.$b;
        return $st;
}
echo main();
?>
