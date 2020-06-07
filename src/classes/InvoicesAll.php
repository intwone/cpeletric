<?php
require_once '../controllers/config.php';

class InvoicesAll {

  private $totalValue = 0;
  private $invoicesAverage = 0;

  public function valueTotalInvoices() {
    global $pdoConnection;
    $sql = "SELECT inv_valor_total FROM invoices";
		$sql = $pdoConnection->query($sql);

    if($sql->rowCount() > 0) {
      foreach($sql->fetchAll() as $value) {
        $this->totalValue += $value['inv_valor_total'];
      }
    }
  }

  public function averageTotalValue() {
    global $pdoConnection;
    $sql = "SELECT inv_valor_total FROM invoices";
		$sql = $pdoConnection->query($sql);

    if($sql->rowCount() > 0) {
      $average = 0;
      $totalValue = 0;

      foreach($sql->fetchAll() as $value) {
        $totalValue += $value['inv_valor_total'];
        $average++;
      }

      $this->invoicesAverage = $totalValue / $average;
    }
  }

  public function getTotalValue() {
    return $this->totalValue;
  }

  public function getInvoicesAverage() {
    return $this->invoicesAverage;
  }
}
?>