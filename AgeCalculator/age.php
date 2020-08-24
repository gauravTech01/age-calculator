
  <!DOCTYPE html>
  <html>
  <head>
  	<style type="text/css">
  		 body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px; 
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 5px;
		height:300;
		width:300;
		background-color: yellow;
         }
         .v
         {
         	color: red;
         }
         .a
         {
         	
         	background-size: 50px;
         	background-color: red;
         }

  	</style>
  	
 </head>
	<body>
	<center>
	<div class='box'>
	<h1 class="v">Age Calculator</h1>
	<form action='age.php' method='POST' name='login_form'>
		<h1> Select Your Birth Date</h1>
		<select name="Day">
			<option value="01">01</option>
			<option value="02">02</option>
			<option value="03">03</option>
			<option value="04">04</option>
			<option value="05">05</option>
			<option value="06">06</option>
			<option value="07">07</option>
			<option value="08">08</option>
			<option value="09">09</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>

		</select>
		<select name="Month"> 
			<option value="01">January</option>
			<option value="02">February</option>
			<option value="03">March</option>
			<option value="04">April</option>
			<option value="05">May</option>
			<option value="06">June</option>
			<option value="07">Jully</option>
			<option value="08">August</option>
			<option value="09">September</option>
			<option value="10">October</option>
			<option value="11">November</option>
			<option value="12">December</option>
			</select>
			<select name="Year">
				<option value="2020">2020</option>
				<option value="2019">2019</option>
				<option value="2018">2018</option>
				<option value="2017">2017</option>
				<option value="2016">2016</option>
				<option value="2015">2015</option>
				<option value="2014">2014</option>
				<option value="2013">2013</option>
				<option value="2012">2012</option>
				<option value="2011">2011</option>
				<option value="2010">2010</option>
				<option value="2009">2009</option>
				<option value="2008">2008</option>
				<option value="2007">2007</option>
				<option value="2006">2006</option>
				<option value="2005">2005</option>
				<option value="2004">2004</option>
				<option value="2003">2003</option>
				<option value="2002">2002</option>
				<option value="2001">2001</option>
				<option value="2000">2000</option>
				<option value="1999">1999</option>
				<option value="1998">1998</option>
				<option value="1997">1997</option>
				<option value="1996">1996</option>
				<option value="1995">1995</option>
				<option value="1994">1994</option>
				<option value="1993">1993</option>
				<option value="1992">1992</option>
				<option value="1991">1991</option>
				<option value="1990">1990</option>
				
				</select>
			
				<br>
				<input type="Submit" name="Submit" value="Calculate Age">


				<?php

				if (isset($_POST['Submit']))
				 {
					# code...
					$d = $_POST['Day'];
					$m = $_POST['Month'];
					$y = $_POST['Year'];

					$dob =$d.'-'.$m.'-'.$y;

					$bday = new dateTime($dob);
					$today = date('d-m-y');
					$age = $bday -> diff(new dateTime);
					echo "<br/>";
					echo"Your Birth Date";
					echo $dob;
					echo "<br/>";
					echo $age->y;
					echo " Year <br>"; 
					echo $age->m;
					echo " Months <br>"; 
					echo $age->d;
					echo " Dates <br>";

				}	
				?>
	</form>
	</div>
</center>

  <center class="a">
  		<h2>YouTube Channel</h2>
  	   <h2>gauravTech </h2>

  </center>
</body>
</html>
