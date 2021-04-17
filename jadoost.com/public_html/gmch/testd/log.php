<style>
	body {background:#444;}
</style>
<?
	
	$data = mysql_query("SELECT * FROM table ORDER BY no DESC");
	while ($row = mysql_fetch_array($data))
	{
		echo('<div style="background:#777; font-weight:bold; color:#DDD; margin-top:10px; padding:10px;">');
		echo$row['user'];
		echo row['chat'];
		echo '</div>';
	}
?></p>
<p>