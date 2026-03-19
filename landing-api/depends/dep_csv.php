<?php
include '../db/csv_read_write.php';
global $csv;
$csv = new CsvReadWrite("../data/mail.csv");
