<?php

require __DIR__ . '/../vendor/autoload.php';

use \FUnit as fu;
use Knlv\Zf2\Filter\Transelot;

fu::test("Test transelot filter works", function () {
    $input = "αβγδεζηικλμνξοπρστυφωάίύέόήώϊϋΐΰςΑΒΓΔΕΖΗΙΚΛΜΝΞΟΠΡΣΤΥΦΩΆΊΎΈΌΉΏΪΫ";
    $expected = "avgdeziiklmnxoprstyfoaiyeoioieiysAVGDEZIIKLMNXOPRSTYFOΑIYEOIOIY";
    $filter = new Transelot();
    fu::equal($filter->filter($input), $expected, "Assert translitteration works");
});
