<?php

$a="A 'quote' is <b>bold</b>";

echo htmlentities($a, ENT_QUOTES);

$orig = "I'll \"walk\" the <b>dog</b> now";

$a = htmlentities($orig);

$b = html_entity_decode($a);

$a."<br>"; // I'll &quot;walk&quot; the &lt;b&gt;dog&lt;/b&gt; now

$b; // I'll "walk" the <b>dog</b> now

?>