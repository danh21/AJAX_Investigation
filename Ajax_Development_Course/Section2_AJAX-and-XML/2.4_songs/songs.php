<?php
header("Content-Type: text/xml; charset=utf-8");

$output = "<?xml version='1.0' encoding='UTF-8'?>";

$output .= "
<catalog>
    <song>
        <title>I Want to Know What Love Is</title>
        <artist>Foreigner</artist>
        <rating>10</rating>
    </song>
    <song>
        <title>Tragedy</title>
        <artist>Bee Gees</artist>
        <rating>6</rating>
    </song>
    <song>
        <title>They Dance Alone</title>
        <artist>Sting</artist>
        <rating>10</rating>
    </song>
    <song>
        <title>Biko</title>
        <artist>Peter Gabriel</artist>
        <rating>10</rating>
    </song>
    <song>
        <title>Keep On Loving You</title>
        <artist>REO Speedwagon</artist>
        <rating>9</rating>
    </song>
    <song>
        <title>Sailing</title>
        <artist>Christopher Cross</artist>
        <rating>9</rating>
    </song>
    <song>
        <title>Beat It</title>
        <artist>Michael Jackson</artist>
        <rating>7</rating>
    </song>
</catalog>
";

echo($output);
?>