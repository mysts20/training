
//alhajji

//cedricklee

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>CEDCHUA</title>

</head>

<body>

<form method="post" action="<?php echo base_url();?>index.php/users/insert_new_user">

<table width="400" border="0" cellpadding="5">



<tr>

<th width="213" align="right" scope="row">Enter your username</th>

<td width="161"><input type="text" name="name" size="20" required/></td>

</tr>

<tr>

<th align="right" scope="row">Enter your email</th>

<td><input type="email" name="email" size="20" required/></td>

</tr>

<tr>

<th align="right" scope="row">Enter your Mobile</th>

<td><input type="number" name="mobile" size="20" required/></td>

</tr>

<tr>

<th align="right" scope="row">Enter Your Address</th>

<td><textarea name="address" rows="5" cols="20" required></textarea></td>

</tr>

<tr>

<th align="right" scope="row">&nbsp;</th>

<td><input type="submit" name="submit" value="Send" /></td>

</tr>

</table>

</form>

</body>

</html>
