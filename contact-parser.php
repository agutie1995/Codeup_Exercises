<?php
$filename  = 'contacts.txt';

function parseContacts($filename){
    $contacts = array();
    // todo - read file and parse contacts
    $handle = fopen($filename, 'r');
    $contents =trim(fread($handle, filesize($filename)));
    $contentsArray = explode(PHP_EOL, $contents);
    foreach ($contentsArray as $key => $value){
        $contactArray = explode('|', $value);
        $contacts[$key]['Name'] = $contactArray[0];
        $contacts[$key]['Number'] = formatPhoneNumber($contactArray[1]);
    }
    fclose($handle);
    return($contacts);
}

function formatPhoneNumber($number){
    return substr($number, 0, 3 ) . '-' . 
        substr($number, 3, 3) . '-' . 
        substr($number, 6, 4);
}

var_dump(parseContacts('contacts.txt'));
?>