<?php

    class DivisaoException extends \Exception {

        public function __construct($message, $code = 0, $previous = null) {

            echo "Erro personalizado: $message<br>";
            parent::__construct($message, $code, $previous);

        }

    }

?>