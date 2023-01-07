<?

function randweight($numbers){
    $total=0;   
    foreach($numbers as $number=>$weight)
    {
        $total+=$weight;
        $distribution[$number]=$total;
    }
    $rand=mt_rand(0,$total-1);
    foreach($distribution as $number=>$weights)
    {
        if($rand<$weights){
            return $number;
        }
    }
}
$number=array(
    '9'=>231,
    '2'=>2332,
    '8'=>2313
);
$ad=randweight($number);
print($ad);
?>
//有很多组广告 这些广告有一定的存量 现在讲这些广告的存量相加（line 7-8）并在这个总数与零之间生成一个随机数（line 10）之后在遍历数组，寻找一个存量能够大于这一随机数的广告，之所以称之为加权是因为存量大的广告出现的几率相对较高