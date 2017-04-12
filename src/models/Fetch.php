<?php
namespace GeorgiaPHP\Models;

class Fetch {
	
	private $result;

	public function searchByCompanyName($query) {
		$pdo = \GeorgiaPHP\DB::get();
		$stmt = $pdo->prepare("SELECT companyName, duns FROM companies WHERE lower(companyName) LIKE ?");
		$stmt->execute(
			array("%$query%")
			) or die(print_r($stmt->errorInfo(), true));
		$result = $stmt->fetchAll();
		return $result;
	}
}
?>