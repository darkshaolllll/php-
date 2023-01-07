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