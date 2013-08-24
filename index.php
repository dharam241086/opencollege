<script>

function validate()
{
    if(document.frm.uid.value=="" || document.frm.pwd.value=="")
    {
        window.alert("Please Enter User ID and Password!");
        return false;
    }

}


</script>


<html>

<head>
<script language="javascript" type="text/javascript" src="niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="niceforms-default.css" />
<meta http-equiv="Content-Language" content="en-us">
<meta name="GENERATOR" content="Microsoft FrontPage 5.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Login Page</title>
</head>

<body>

<div id="container">
  
<form name="frm" method="POST" action="login.php" class="niceform" onsubmit="return validate();">
  <!--webbot bot="SaveResults" u-file="C:\wamp\www\mailfilter\_private\form_results.csv" s-format="TEXT/CSV" s-label-fields="TRUE" -->
  <fieldset>
<table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
  
</table>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="100%">
    <tr>
    <td width="16%" height="136">
    <img border="0" src="images/logo_comp.jpg" width="222" height="111"></td>
    <td width="84%" height="136">
    <img border="0" src="images/cdgi.jpg" width="500" height="110"></td>
  </tr>
  <tr>
    <td width="100%" height="1" colspan="2"></td>
  </tr>
    <tr>
      <td width="100%" colspan="3"><font color="#008000">
      <marquee behavior="alternate" direction="right">Enter Your Login ID and Password</marquee></font></td>
    </tr>
    
    <tr>
      <td width="100%" colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td width="11%">Login ID</td>
      <td width="122%" colspan="2"><b><input type="text" name="uid" size="20"></b></td>
    </tr>
    <tr>
      <td width="100%" colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td width="11%">Password</td>
      <td width="122%" colspan="2"><b>
      <input type="password" name="pwd" size="20"></b></td>
    </tr>
   
    
    <tr>
      <td width="19%">&nbsp;</td>
      <td width="5%">&nbsp;</td>
      <td width="76%">&nbsp;</td>
    </tr>
    <tr>
      <td width="100%" colspan="3"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="submit" value="Submit" name="B1"></b></td>
    </tr>
  </table>
</fieldset>
</form>
</div>
</body>

</html>
