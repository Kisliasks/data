<?php

$data = [
    [
    "internal_history_id"=>
    "2230893",
    "external_id"=>
     "8615",
    "external_commission"=>
    "0.0005",
  ],
 [
    "internal_history_id"=>
     "2230891",
    "external_id"=>
     "2159",
    "external_commission"=>
     "0.0200",
  ],
 [
    "internal_history_id"=>
    "2230892",
    "external_id"=>
    "5349",
    "external_commission"=>
     "0.0060",
  ],
  [
    "internal_history_id"=>
    "563089",
    "external_id"=>
    "8659",
    "external_commission"=>
     "0.0054",
  ],
  [
    "internal_history_id"=>
    "217403",
    "external_id"=>
     "1462",
    "external_commission"=>
    "0.0040",
  ],
[
    "internal_history_id"=>
    "2230883",
    "external_id"=>
    "8859",
    "external_commission"=>
    "0.0008",
  ],
];


printf("%-20s | %-20s | %-20s\n", "Internal ID", "External ID", "Commission");

foreach ($data as $item) {
    printf(
        "%-20s | %-20s | %-20s\n",
        $item["internal_history_id"],
        $item["external_id"],
        $item["external_commission"]
    );
}
