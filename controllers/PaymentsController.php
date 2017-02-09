<?php

class PaymentsController{
	public function actionIndex()
	{
		$title = " всё для вейпа, оплатить с доставкой ";

		require_once(ROOT . "/views/payments/index.php");
		return true;
	}
}