CREATE TABLE system_management;
USE system_management;

CREATE TABLE invoices (
  inv_id INT AUTO_INCREMENT NOT NULL,
  inv_unidade VARCHAR(50),
  inv_mes_referencia VARCHAR(50),
  inv_ano_referencia VARCHAR(50),
  inv_identificacao VARCHAR(20),
  inv_vencimento DATE,
  inv_consumo_eletricidade_pta FLOAT(20),
  inv_consumo_eletricidade_fpta FLOAT(20),
  inv_energia_reativa_exc_pta FLOAT(20),
  inv_energia_reativa_exc_fpta FLOAT(20),
  inv_demanda FLOAT(20),
  inv_demanda_reativa_exc FLOAT(20),	
  inv_acresc_moratorio FLOAT(20),
	inv_juros_conta_anterior FLOAT(20),
	inv_multa_atraso FLOAT(20),
	inv_multa_ilum_publica FLOAT(20),
	inv_cont_ilum_publica FLOAT(20),
	inv_demanda_isenta_icms FLOAT(20),
	inv_energia_cons_bvermelha FLOAT(20),
	inv_energia_cons_bamarela FLOAT(20),
	inv_energia_cons_bvermelha_p2 FLOAT(20),
	inv_base_calc_icms FLOAT(20),
	inv_valor_icms FLOAT(20),
	inv_valor_total FLOAT(20),
  inv_created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  inv_updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (inv_id)
);
