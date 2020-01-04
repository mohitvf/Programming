<?php
namespace Database;
class DBController {
	public $database_name;
	function __construct() {
		$this->database_name = "db_namespace";
	}
}
function print_database_name($objDBController) {
	echo $objDBController->database_name;
}

Echo 'Normal Access : ';
$objDBController = new DBController();
print_database_name($objDBController);


Echo '<br> Accessing from Global Space : ';
$objDBController = new \Database\DBController();
\Database\print_database_name($objDBController);


Echo '<br> Accessing with namespace Keyword : ';
$objDBController = new namespace\DBController();
namespace\print_database_name($objDBController);


Echo '<br> Accessing with namespace Keyword : ';
__NAMESPACE__ . print_database_name($objDBController);


?>