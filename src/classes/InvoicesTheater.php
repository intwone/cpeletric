<?php
require_once '../controllers/config.php';

class InvoicesTheater {

  private $refMonth = array();
  private $totalValue = array();

  public function amountSpentPerMonth() {
    global $pdoConnection;
    $sql = "SELECT inv_mes_referencia, inv_valor_total FROM invoices WHERE inv_unidade = :unit";
		$sql = $pdoConnection->prepare($sql);
    $sql->bindValue(':unit', 'Teatro');
		$sql->execute();

    if($sql->rowCount() > 0) {
      foreach($sql->fetchAll() as $value) {
        array_push($this->refMonth, $value['inv_mes_referencia']);
        array_push($this->totalValue, $value['inv_valor_total']);
      }
    }
  }

  

  public function getRefMonth() {
    return $this->refMonth;
  }

  public function getTotalValue() {
    return $this->totalValue;
  }
}
?>