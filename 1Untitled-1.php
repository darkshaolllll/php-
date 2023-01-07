<?php
function pca($fields,$data){
    $r=array();
    for($i=0,$j=count($data);$i<$j;$i++)
    {
        $line_pos=0;
        foreach($fields as $field_name=>$field_length){
            $r[$i][$field_name]=rtrim(substr($data[$i],$line_pos,$field_length));
            $line_pos+=$field_length;
        }
    }
    return $r;
}
$book_fields=array('title'=>25,'author'=>14,'publication_year'=>4);
$books=array(
    array('asdasd','nn',136612),
    array('n222','nn1',173),
    array('asnnn5','n',1317)
);
$book_array=pca($book_fields,$books);
?>