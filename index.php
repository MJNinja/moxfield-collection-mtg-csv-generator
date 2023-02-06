<?php
/* Turn card data into array from txt file */
$mtg_card_array = explode("\n", file_get_contents('mtg-cards-list.txt'));

/* Create / Open CSV File */
$file = fopen('import.csv', 'w');

/* Insert column names into first line of csv file */
fputcsv($file, array("Count","Tradelist Count","Name","Edition","Condition","Language","Foil","Tags","Last Modified","Collector Number"));

/* Loop through card array */
foreach ($mtg_card_array as $card) {
    /* Get name of card */
    preg_match('/\d{1,4}\s(.*?)\s\(/',$card,$match);
    $card_name = $match[1];

    /*Remove card name from original string*/
    $card = str_replace($card_name,"",$card);

    /* Turn card values into an array */
    $card_values = explode(" ", $card);
    //print_r($card_values);

    /* Get additional card values */
    $card_amount = trim(str_replace(' ', '', $card_values[0]));
    $card_set = trim(str_replace(' ', '', $card_values[2]));
    $card_number = trim(str_replace(' ', '', $card_values[5]));
	$card_foiling = trim(str_replace(' ', '', $card_values[4]));

    /* Generate CSV string */
    //echo $card_data = '"'.$card_amount.'","'.$card_amount.',"'.$card_name.'","'.$card_set.'","Near Mint","English","'.$card_foiling.'","","","'.$card_number.'"';
    //echo '<br />';

	/* Insert data into CSV file */
    fputcsv($file, array($card_amount, $card_amount, $card_name, $card_set, 'Near Mint', 'English', $card_foiling, '', '', $card_number));
}

/* Close CSV File */
fclose($file);

echo 'Done';
?>
