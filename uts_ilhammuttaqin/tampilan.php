<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
}

#isi{
	height:500px;
	}

#isi h1{
	text-align:center;
	font-family: 'Oswald', sans-serif;
	}
table{
	font-family: 'Oswald', sans-serif;
	}
</style>
</head>

<body>
	<div id="isi">
    	<h1>TAMPILAN MENU GUEST BOOK</h1>
    	<form id="form1" name="form1" method="post" action="">
    	  <table width="366" border="1" align="center">
    	    <tr>
    	      <td width="84">NAMA</td>
    	      <td width="266"><?php echo $_POST ['nama'] ?></td>
  	      </tr>
    	    <tr>
    	      <td>EMAIL</td>
    	      <td><?php echo $_POST ['email'] ?></td>
  	      </tr>
    	    <tr>
    	      <td>SARAN</td>
    	      <td><label for="textarea"></label>
   	          <textarea name="textarea" cols="45" rows="5" readonly="readonly" id="textarea"><?php echo $_POST ['saran'] ?>
              </textarea></td>
  	      </tr>
  	    </table>
      </form>
    </div>
</body>
</html>