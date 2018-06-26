<?php
  require 'simple_html_dom.php';
  $html = str_get_html($_POST['html']);

  $rows = $html->find('.search-contact-card-row');
  var_dump($rows);

  for($x = 0; $x < count($rows); $x++){
    $company = $rows[$x]->find('.listing-name', 0)->plaintext;
    $email = $rows[$x]->find('.contact-email', 0)->getAttribute('data-email');
    $phone = $rows[$x]->find('.contact-text', 0)->plaintext;
    $website = $rows[$x]->find('.contact-url', 0)->plaintext;


    echo $company . '<br>';
    echo $email . '<br>';
    echo $phone . '<br>';
    echo $website . '<br>';
  }
?>
