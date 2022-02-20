     <?php
if(isset($_POST['submit'])){
	$startDate=$_POST['date'];// Дата
	$term = $_POST['term'];// срок вклада
	$sum  = $_POST['sum'];// сумма вклада
	$operation = $_POST['operation'];// выбор месяца или года
	$sumAdd=$_POST['sumAdd'];// ежемесячное пополнение
	$percent1=$_POST['percent'];// процентная ставка

}
	
	
	if (empty($sumAdd)) {
    $sumAdd=0;
}
	
	// Валидация
	if(!$operation || (!$term  && $sum  != '0') || (!$term   && $sum  != '0')) {
		$error_result = 'Не все поля заполнены';
	  }
    else {
	    
        switch($operation){

			case 'месяц':
				$result=$sum *30 *	$percent1/365;
				for($i=0;$i<$term;$i++){

				   $sam=round($sum+($sum*$percent1*30)/(365*100),1);

				   $sum=$sam+$sumAdd;				   
				}

			    break;

			case 'год':
			  for($i=0;$i<$term*12;$i++){

				   $sam=round($sum+($sum*$percent1*30)/(365*100),1);

				   $sum=$sam+$sumAdd;				   
				}

			    break;
		 
		}
	    
	}
    if(isset($error_result)){
    	echo "<div class='error-text'>Ошибка: $error_result</div>";
    }	
    else {
		$sss=round($sam, 1);
		echo " Сумма к выплате:\n 
		₽ $sss";
	 			
    }

?>