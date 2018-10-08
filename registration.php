<?php ?>
<html>
<head>
</head>
<body>
<form name="" method="post" action="login.php">
<table align="left">
     <tr>
       <td>
         Username
          </td>
          <td>
          <input type ="text"name="un"/><br>
          </td>
		  </tr>
     <tr>
       <td>
         Fullname:
          </td>
          <td>
          <input type ="text"name="fn"/><br>
          </td>
	 </tr>
	  <tr>
       <td>
         Email:
          </td>
          <td>
          <input type ="text"name="ue"/><br>
          </td>
		  </tr>
		  <tr>
       <td>
         Phone:
          </td>
          <td>
          <input type ="text"name="up"/><br>
          </td>
		  </tr>
		  <tr>
       <td>
         Password:
          </td>
          <td>
          <input type ="text"name="pw"/><br>
          </td>
		  </tr>
		  <tr>
       <td>
         Confirm Password:
          </td>
          <td>
          <input type ="text"name="cpw"/><br>
          </td>
		  </tr>
		  <tr>
       <td>
         Gender:
          </td>
          <td>
          <input type ="radio"name="gen"  value="male"/>Male
		   <input type ="radio"name="gen" value="female"/>Female
		    <input type ="radio"name="gen" value="other"/>Other
          </td>
		  </tr>
		     <tr>
       <td>
         Education:
          </td>
          <td>
          <input type ="checkbox"name="edu[]" value="SSC"/>SSC
		  <input type ="checkbox"name="edu[]" value="HSC"/>HSC
		  <input type ="checkbox"name="edu[]" value="BSC"/>BSC
		  <input type ="checkbox"name="edu[]" value="MSC"/>MSC
		  </td>
		  </tr>
		  <tr>
       <td>
          </td>
          <td>
          <input type ="submit" value="Submit"/>
          </td>
		  </tr>

</form>
</body>
</html>