
				<div id='leftCol'>
					
					<img id='logo' src='images/logo.jpg' alt='Old Man Milliner & Co. logo'>
					<form name='search' id='searchForm' action='shop.php' method='post'>
						<h2>Start Hat Shopping!</h2><br>
						<input type='submit' value='Get Hats!'>

<?php

    echo "<input type='hidden' name='testPost' value='1'>";

    echo "<h3>Style</h3>";
    $qString = "SELECT DISTINCT style FROM hats ORDER BY style;";
    $records = q($qString);
    $rows = $records->num_rows;
    for ($i = 0; $i < $rows; ++$i) {
        $records->data_seek($i);
        $record = $records->fetch_array(MYSQLI_ASSOC);
        $param = $record['style'];
        echo "<input type='checkbox' name='styles[]' value='" . $param . "'>" . $param . "<br>\n";
    }

    echo "<h3>Label</h3>";
    $qString = "SELECT DISTINCT label FROM hats ORDER BY label;";
    $records = q($qString);
    $rows = $records->num_rows;
    for ($i = 0; $i < $rows; ++$i) {
        $records->data_seek($i);
        $record = $records->fetch_array(MYSQLI_ASSOC);
        $param = $record['label'];
        echo "<input type='checkbox' name='labels[]' value='" . $param . "'>" . $param . "<br>\n";
    }

    echo "<h3>Color</h3>";
    $qString = "SELECT DISTINCT color FROM inventory ORDER BY color;";
    $records = q($qString);
    $rows = $records->num_rows;
    for ($i = 0; $i < $rows; ++$i) {
        $records->data_seek($i);
        $record = $records->fetch_array(MYSQLI_ASSOC);
        $param = $record['color'];
        echo "<input type='checkbox' name='colors[]' value='" . $param . "'>" . $param . "<br>\n";
    }

echo <<<_END
                            <h3>Size</h3>
                            <input type='checkbox' name='sizes[]' value='sm' >Small<br>
                            <input type='checkbox' name='sizes[]' value='md'>Medium<br>
                            <input type='checkbox' name='sizes[]' value='lg' >Large<br>
                            <input type='checkbox' name='sizes[]' value='xl' >X-Large<br>
    
_END;

    echo "<h3>Material</h3>";
    $qString = "SELECT DISTINCT material FROM hats ORDER BY material;";
    $records = q($qString);
    $rows = $records->num_rows;
    for ($i = 0; $i < $rows; ++$i) {
        $records->data_seek($i);
        $record = $records->fetch_array(MYSQLI_ASSOC);
        $param = $record['material'];
        echo "<input type='checkbox' name='materials[]' value='" . $param . "'>" . $param . "<br>\n";
    }     
?>

						<br>
						<input type='submit' value='Get Hats!'>
						<br>&nbsp;<br>
					</form>
				</div>