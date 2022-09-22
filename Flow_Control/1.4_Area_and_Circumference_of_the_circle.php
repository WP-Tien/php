<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Area and circumference of the circle</title>
    <style type="text/css">
    
    .style5 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: smaller; }
    .style7 {
      font-family: LucidaHandwriting, LucidaCalligraphy;
      font-size: 20px;
      font-weight: bold;
      color: #993300;
    }
    </style>
  </head>
  <?php 
  $err="";
  $flag=true;

  if(isset($_POST["Submit"]))
  {
    $radius = $_POST["radius"];
    $area = $_POST["area"];
    $circumference = $_POST["circumference"];
    define("PI",3.14);
    
    if($radius == "")
    {
      $err = " Can't find radius";
      $flag = false;
    }
    
    if(!is_numeric($radius))
    {
      $err .= " Radius must be numeric ";
      $flag = false;
    }
    
    else if($radius <= 0)
    {
      $err = " Radius must be greater than 0";
      $flag = false;
    }
    
    if($flag)
    {
      $area = PI * $radius * $radius;
      $circumference = 2 * PI * $radius;
    }
  }
  ?>

  <body>
    <form id="form1" name="form1" method="post" action="">
      <table width="350" border="0" align="center" cellpadding="2" cellspacing="2" bgcolor="#FFEBCA">
        <tr align="center">
          <td colspan="2" bgcolor="#FFCC66"><span class="style7">Area and circumference of the circle</span></td>
        </tr>
        <tr>
          <td width="136"><p><span class="style5">&nbsp;Radius: </span></p></td>
          <td width="200"><span class="style5">
            <label>
            <input name="radius" type="text" value="<?php echo (isset($radius)) ? "$radius" : ""; ?>"/>
            </label>
          </span></td>
        </tr>
        <tr>
          <td><p><span class="style5">&nbsp;Area: </span></p></td>
          <td><span class="style5">
            <label>
            <input name="area" type="text"  readonly="true" value="<?php echo (isset($area)) ? "$area" : "" ; ?>" style="background-color:#FFCCCC" />
            </label>
          </span></td>
        </tr>
        <tr>
          <td><p><span class="style5">&nbsp;Curcumference: </span></p></td>
          <td><span class="style5">
            <label>
            <input name="circumference" type="text" readonly="true" value="<?php echo (isset($circumference)) ? "$circumference" : ""; ?>" style="background-color:#FFCCCC"/>
            </label>
          </span></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><label>
            <input type="submit" name="Submit" value="Calculate" />
          </label></td>
        </tr>
      </table>
    </form>
    <h2 align="center" style="color:#F03"><?php echo $err ?></h2>
  </body>
</html>
