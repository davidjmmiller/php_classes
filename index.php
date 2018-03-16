<?php

require 'vendor/autoload.php';
echo '<p>';
echo (new \David\Company\Person('David'))->getName();
echo '<br>';
echo (new \David\Customer('Madrigal'))->getName();
echo '</p>';