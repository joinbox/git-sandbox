<?php

function customer_preprocess_node__event__teaser__ics(&$variables) {
  $node = $variables['node'];
  $variables['preprocessor'] = [
    'title' => $node->getTitle(),
    'from' => strtotime($node->field_startdate->value),
    'to' => $node->field_enddate->value ? $node->field_enddate->date->getTimestamp() : $node->field_startdate->date->getTimestamp(),
    'venue' => $node->field_venue->value,
  ];
}
