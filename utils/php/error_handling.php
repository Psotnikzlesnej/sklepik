<?php
function exception_handler(Throwable $exception) {
  echo "No error, no: " , $exception->getMessage(), "\n";
}

set_exception_handler('exception_handler');
?>