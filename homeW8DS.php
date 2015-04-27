<?php
require_once 'arrays.php';

echo"<pre>";
print_r($arr);
echo"</pre>";
echo'--------------------------------';
reckOut($arr);

function reckOut ($cehc) {
    echo"<ul>";
    if (is_array($cehc)){
        foreach ($cehc as $k=>$v){
            if(is_array($v)){                
                echo "<li>"."<a href=".$k.">".$k."</a>";
                reckOut($v);
                echo "</li>";
                
            }else{echo "<li>"."<a href=".$k.">".$v."</a>"."</li>";}
        }
    }else{echo "<li>"."<a href=".$cehc.">".$cehc."</li>";}
    echo "</ul>";
}




?>
<ul>
    <li>
        <a href="#1">Раздел 1</a>
        <ul>
            <li>
                <a href="#1.1">Раздел 1.1</a>
                <ul>
                    <li>
                        <a href="#1.1.1">Раздел 1.1.1</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#1.2">Раздел 1.2</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#2">Раздел 2</a>
        <ul>
            <li>
                <a href="#1.2">Раздел 1.1</a>
            </li>
            <li>
                <a href="#1.2">Раздел 1.2</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#3">Раздел 3</a>
        <ul>
            <li>
                <a href="#3.1">Раздел 3.1</a>
            </li>
        </ul>
    </li>
</ul>
