<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Simple CRUD</title>
	<style>
        h2 {
        background-color:#FFB6C1;
        color:white;
		text-align:center;
		padding: 1em;
        }
		footer, h3 {
        background-color:#FFB6C1;
        color:white;
		text-align:center;
        }
		body{
background: url('sakura2.jpg') no-repeat scroll;
background-size: 100% 100%;
min-height: 700px;
}
    </style>
</head>
<body>
	<h2>LOGIN</h2>
  <form>
    <table width="500" height="198" border="0" align="center" background="pink1.jpg">
    <tr>
      <th width="24" rowspan="3" scope="row">&nbsp;</th>
      <th height="35%" colspan="3" scope="row">&nbsp;</th>
      <td width="22" rowspan="3">&nbsp;</td>
    </tr>
    <tr>
      <th width="85" height="45" scope="row"> <div align="left" class="style1"><em>Username</em></div></th>
      <td width="15">:</td>
      <td width="161">
        <input type="text" name="username" />      </td>
      </tr>
    <tr>
      <th height="30" scope="row"><div align="left" class="style1"><em>Password</em></div></th>
      <td>:</td>
      <td><input type="password" name="password" /></td>
      </tr>
    <tr>
      <th height="45" colspan="5" scope="row">
         <a href="home"><input type="submit" name="Submit" value="Login" /></a>  
        <input name="reset" type="reset" value="Batal" /></th>
      </tr>
    <tr>
      <th height="27" colspan="5" scope="row">&nbsp;</th>
    </tr>
  </table>
  </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>