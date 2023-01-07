<?php
$sales=array(
    array('northeast','2005-1-1','2005-2-1',12.54),
    array('northwest','2005-1-1','2005-2-1',546.33),
    array('southwest','2005-1-1','2005-2-1',93.26),
    array('southeast','2005-1-1','2005-2-1',945.21),
    array('ALL Regions','--','--',159.34)
);
$fh=fopen('sales.csv','w')or die(" cant");
foreach($sales as $sales_line){
    if(fputcsv($fh,$sales_line)===false){
        die("sdfsdfs");
    }
    fclose($fh)or die("asdasd");
}
?>
/////////////////////////////////////////////////////////////////////////////////////////////////////////
<?php
$books=array(
    array('asdasd','nn',136612),
    array('n222','nn1',173),
    array('asnnn5','n',1317)
);
foreach($books as $book)
{
    print pack('A25A15A4',$book[0],$book[1],$book[2]."\n");
}
?>
输出的结果为什么在第二个数组的时候会不换行
///////////////////////////////////////////////////////////////////////////////////////////////////////
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
输出后长度相同
////////////////////////////////////////////////////////////////////////////////////////////////////////
超级全局变量
<?php
function pc_fixed_width_substr($fields,$data){
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
$book_fields=array('title'=>25,
'author'=>14,
'publication_year'=>4
);
$books=array(
    array('asdasd','nn',136612),
    array('n222','nn1',173),
    array('asnnn5','n',1317)
);
$book_array=pc_fixed_width_substr($book_fields,$books);
?>
为什么会出现这样的错误

Fatal error: Uncaught TypeError: substr(): Argument #1 ($string) must be of type string, array given in C:\Users\52784\Desktop\php\Untitlssssed-1.php:8
Stack trace:
#0 C:\Users\52784\Desktop\php\Untitlssssed-1.php(8): substr()
#1 C:\Users\52784\Desktop\php\Untitlssssed-1.php(23): pc_fixed_width_substr()
#2 {main}
  thrown in C:\Users\52784\Desktop\php\Untitlssssed-1.php on line 8
////////////////////////////////////////////////////////////////////
Var_dump()用来输出数组但有的时候可以把数组转成数组进行输出；  
json_encode($words);
//////////////////////////////////////////////////////////////
/x/i
//是正则表达式开始和结束的标志该正则表达式的意思是取x并且不论大小写
<?php
$match="3+2/7-9";
$stack=preg_split('/ *([+\-\/*]) */',$match,-1,PREG_SPLIT_DELIM_CAPTURE);
print_r($stack);
?>
正则表达式
////////////////////////////////////////////////////////////////////
<pre>是对空格和空行进行保留功能的函数
////////////////////////////////////////////////////////////////
's4'对应的输出方法
