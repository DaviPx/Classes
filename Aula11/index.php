<?php

//TODO: implementar auto requirimento de classes  
//require_once ("treater/requestTreater.php");

require_once ("database/database.php");

//Externaliza o resultado do processamento da API em formato JSON, sempre.
//echo (new RequestTreater())->start();

echo (new DBHandler())->search();
//echo phpinfo();