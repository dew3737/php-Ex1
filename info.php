<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>PHP Form</title>
</head>
<body>
<table border="1">
	<tr>
		<td>이름</td>
		<td><?php echo $_POST["name"]; ?></td>
	</tr>
	<tr>
		<td>아이디</td>
		<td><?php echo $_POST["id"]; ?></td>
	</tr>
</table>
</body>
</html>