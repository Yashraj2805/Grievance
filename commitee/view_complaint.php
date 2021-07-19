<?php 
include_once 'nav.php';

require 'config.php';

?>
<html>
<head>
	<style type="text/css">
		a
		{
			text-decoration: none;
			color :#404042;
		}
		b
		{
			color:#030350;
		}
	
table {
    border-collapse: collapse;
    width: 100%;
}
th{
	background-color: #2196F3;
	color: white;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
</style>
</head>

	<body onload="myFunction()">
<script type="text/javascript">
	function myFunction() {
    var element = document.getElementById("view");
    element.classList.add("active");
}
</script>
<input type="search" class="light-table-filter" id="input" data-table="order-table" placeholder="seach complaint">
<table class="order-table table">
	<thead>
	<tr>
		<th width="150px">complaint ID</th>
		<th>title</th>
		<th>date</th>
	</tr>
</thead>
<?php 
$uname = $_SESSION['uname'];
$q = mysqli_query($connect,"SELECT * from complaints ORDER BY c_id DESC ");
while($rows = mysqli_fetch_array($q))
{
	$readres= $rows['readres'];
if (strpos($readres,$uname)=== false) {
	$b="<b>";
	$b_ = "</b>";
}
else
{
	$b = null;
	$b_ =null;
}
	 ?>
	<tr>
		<td><a href="dis.php?id=<?php echo $rows['c_id'];?>"><?php echo $b; echo $rows['c_id']; echo $b_; ?></a></td>
		<td><a href="dis.php?id=<?php echo $rows['c_id'];?>"><?php echo $b; echo $rows['title']; echo $b_; ?></a></td>
		<td><a href="dis.php?id=<?php echo $rows['c_id'];?>"><?php echo $b; echo $rows['date1']; echo $b_; ?></a></td>
	</tr>
	<?php 
}

?>

</table>
</body>
<script type="text/javascript">
(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
</script>
</html>