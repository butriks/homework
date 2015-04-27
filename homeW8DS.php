<?php
require_once 'arrays.php';

reckOut($arr);

function reckOut ($cehc,$i=1) {
    echo"<ul>";
    if (is_array($cehc)){
        foreach ($cehc as $k=>$v){
            if(is_array($v)){  
                $j=$i;
                echo "<li>"."<a href=\"#".str_replace(',', '.', $i)."\">".$k."</a>";
                reckOut($v,$j.=',1');
                echo "</li>";
                
            }else{echo "<li>"."<a href=\"#".str_replace(',', '.', $i)."\">".$v."</a>"."</li>";}
            $i++;
        }
    }else{echo "<li>"."<a href=\"#".str_replace(',', '.', $i)."\">".$cehc."</li>";}
    echo "</ul>";
}




?>
<h3>Model</h3>
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
