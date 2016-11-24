<p> Hello <?php echo $_POST['User']; ?> </p>
<p> Back to page <a href="formulaire.php"> application </a></p>>

<!--Application-->
<select name ="choix">
  <!--Application Choice-->
	<option value="Temperature" selected="selected">Temperature</option>
	<option value="HistoryTemperature">Temperature History</option>
	<option value="Schedule">Schedule</option>
</select>	
  <!--Validation Type-->
<input type="submit" value="Check" />
