<?php
function formataTexto($txt)
{
    echo $txt;
    echo "<br>";
    echo strtolower($txt);
    echo "<br>";
    echo strtoupper($txt);
    echo "<br>";
    echo ucfirst(strtolower($txt));
}
