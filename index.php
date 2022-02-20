<!DOCTYPE html>
<html lang="ru">
  <head >
    <meta charset="utf-8">
    <title>Тест</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="script.js"></script>
	</head>
  <body max-width: 1152px;  bgcolor="#E5E5E5"; >
    
      <section class="header">
      	<div>
      		<img src="img/logo.svg" class="logo"  >
      		<h2>Deposit Calculator</h2>
        </div>
      </section>
      <main>
          <section id="aba" class="aba">
	             <div class="container">
	             	 
	             	<h1>Депозитный калькулятор</h1>
		            <p>Калькулятор депозитов позволяет рассчитать ваши доходы после внесения суммы на счет в банке по опредленному тарифу.</p>
	
	        <form action='' method='post' >
	            	
	        <input type="date" class="data" name="date" placeholder="Дата открытия">
	             	
	        <input type="number"  class="term" name  = "term"  placeholder="Срок вклада">
	             						
					<select  class="operations" name="operation" >
					<option value='месяц'>месяц</option>
					<option value='год'>год</option>
          </select>

	        <input type="number" class="sum" name  = "sum" placeholder="Сумма вклада"  min="1000" max="300000">
	             	
					<input type="number" class="percent" name  = "percent" placeholder="Процентная ставка,% годовых"  min="3" max="100">
	             	
					<label > 
						<input type="checkbox" class="in5"  id="myCheck" name="myCheck" placeholder="Ежемесячное пополнение вклада" onclick="myFunction()"  >
						<span class="in5t" >Ежемесячное пополнение вклада</span>
					</label>
	        
	        <input type="number" class="sumAdd" placeholder ="Сумма пополнения вклада"  name="sumAdd" id="text" style="display:none" min="0" max="3000000">
	             	
					<input  class="submit" type="submit" name="submit" value="Рассчитать" > 
   	    </form></div>
	      </section >
	            <span class="calc">
	
	          <?php
              include 'calc.php';
            ?>
        </span>

      </main>
    </body>
</html>
	           

