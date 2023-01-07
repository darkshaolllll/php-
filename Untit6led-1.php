<?php
$books=array(
    array('asdasd','nn',136612),
    array('n222','nn1',173),
    array('asnnn5','n',1317)
);
foreach($books as $book)
{
    $title=str_pad(substr($book[0],0,25),25,'.');
    $author=str_pad(substr($book[1],0,15),15,'.');
    $year=str_pad(substr($book[2],0,4),4,'.');
    print "$title$author$year\n";
}
?>