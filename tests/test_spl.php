<?php
// As an object set
$s = new SplObjectStorage();

$o1 = new StdClass;
$o2 = new StdClass;
$o3 = new StdClass;

$s->attach($o1);
$s->attach($o2);

var_dump($s->contains($o1));
var_dump($s->contains($o2));
var_dump($s->contains($o3));

$s->detach($o2);

var_dump($s->contains($o1));
var_dump($s->contains($o2));
var_dump($s->contains($o3));
?>

<?php
$spl = new SplObjectStorage ();
$keyForA = new StdClass();
$keyForB = new StdClass();
$spl[$keyForA] = 'value a';
$spl[$keyForB] = 'value b';
foreach ($spl as $key => $value)
{
    // $key is NOT an object, $value is!
    // Must use standard array access to get strings.
    echo $spl[$value] . "\n"; // prints "value a", then "value b"
}
// it may be clearer to use this form of foreach:
foreach ($spl as $key)
{
    // $key is an object.
    // Use standard array access to get values.
    echo $spl[$key] . "\n"; // prints "value a", then "value b"
}
?>