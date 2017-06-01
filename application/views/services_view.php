<h1 class="page-title">Опыт работы</h1>
В таблице ниже представлен мой 20 летний в области интернет-технологий.
<br/><br/>
<div class="table-responsive">
<table class="table table-hover">

<tr><td>Год</td><td>Организация</td><td>Должность</td><td>Описание</td></tr>
<?php

	foreach($data as $row)
	{
		echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Firm'].'</td><td>'.$row['Post'].'</td><td>'.$row['Description'].'</td></tr>';
	}
	
?>
</table>
</div>
