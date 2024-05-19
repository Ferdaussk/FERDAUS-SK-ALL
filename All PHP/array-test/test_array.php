<?php
/*
$nameOne = [
    [
        'one' => 'One',
        'two' => 'Two',
        'three' => 'Three',
        'four' => 'Four',
        'five' => 'Five',
    ],
    [
        'one1' => 'One1',
        'two1' => 'Two1',
        'three1' => 'Three1',
        'four1' => 'Four1',
        'five1' => 'Five1',
    ],
    [
        'one2' => 'One2',
        'two2' => 'Two2',
        'three2' => 'Three2',
        'four2' => 'Four2',
        'five2' => 'Five2',
    ]
];

foreach ($nameOne as $outerIndex => $innerArray) {
    echo "Outer Index: $outerIndex<br>";
    foreach (array_keys($innerArray) as $key) {
        $value = $innerArray[$key];
        echo "$key: $value<br>";
		echo $outerIndex+1;
		echo '<br>';
    }

    echo "<br>";
}
*/

$categories = ['General', 'CV Builder', 'Hero Sections', 'Blog Widgets', 'Woocommerce Widgets', 'Extensions'];
$all_T = [];

foreach ($categories as $category) {
    $widgetTitle = '<h2 class="bwd-widget-cat-title">';// . wp_kses_post("$category Widgets (<div class=\"widgetCount\"></div>)");

    if ($category === 'CV Builder' || $category === 'Hero Sections' || $category === 'Extensions') {
        $widgetTitle .= ' <sup><span>Pro</span></sup>';
    }

    $widgetTitle .= '</h2>';

    $all_T[] = $widgetTitle;
}
echo $all_T[1];


?>
