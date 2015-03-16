<!DOCTYPE html>

<html lang="en">
<head>
<meta name="viewport"content="width=device-width, initial-scale=1.0">
<title>Welcome to GreatLakes </title>


    <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/datepicker.css'); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url('css/bootstrap-timepicker.min.css'); ?>" rel="stylesheet" type="text/css">

        <!-- Le fav and touch icons -->
     
        <!-- Le scripts-->
        <script type="text/javascript" src="<?php echo base_url('js/jquery.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap-datepicker.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('js/bootstrap-timepicker.min.js'); ?>"></script>
  
 <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script> 
   <script type="text/javascript" src="<?php echo base_url('js/bootstrap.js'); ?>"></script> 

 <script type="text/javascript" src="<?php echo base_url('js/car2.js'); ?>"></script>
 <script type="text/javascript" src="<?php echo base_url('js/car1.js'); ?>"></script>
 

</head>
<div class="navbar navbar-inverse navbar-static-top">
    <a href = "#" class="navbar-brand">&nbsp;&nbsp;&nbsp;____________Title1234567 or Banner change2____________</a>
                    <div class="container">
                        
                        <button class="navbar-toggle" data-toggle ="collapse" data-target=".navHeaderCollapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse navHeaderCollapse">
                            <ul class="navbar navbar-nav navbar-right ">
                                
                                
                                
                  

            




</li>


  
         
                                
                            </ul>
                                
                        
                    </div>
                    
                  </div>          
                    
                    </div>
<body><table width="1389"  style="position: absolute; left:0%; top: 5%; width: 100%; height: 388px; font-weight: bold; font-family: 'Times New Roman', Times, serif;">
 
 <tr>
     <td height="25" colspan="3" align="center">
    </td>
   <td colspan="2" align="center">
     <div style="position:absolute;left:10%;">
    <form class="form-horizontal" action="<?php echo site_url('login/check'); ?>" method="POST">
            <fieldset>
                <div id="legend">
                    <legend class="">Login </legend>
                </div>
                <div class="control-group">
                    <!-- Username -->
                    
                    <div class="controls"<label class="control-label" for="username">Username</label>
                        <input type="text" id="username" name="username" placeholder=""  class="input-xlarge" style="width: 300px">
                    </div>
                </div>
             <p></p>
                <div class="control-group">
                    <!-- Password-->
                    
                    <div class="controls"<label class="control-label" for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="" class="input-xlarge" style="width: 300px">
                    </div>
                </div>


                <div class="control-group">
                    <!-- Button -->
                    <div class="controls">
                        
                        <p></p>
                        <p></p>
                        
                        <button class="btn btn-success" style="height:30px">Login</button></br>
                    </div>
                </div>
            </fieldset></form>
     <form action="<?php echo site_url('login/forgot') ?>">
         <button class="btn btn-info" style="height:30px;margin-top: 5px;" type="submit"> Forgot Password</button>
        </form>
        <?php
        if ($error) {
            echo '<div class="alert alert-error">';
            
echo "<font color='red'><strong>$error_message </strong></font>";

            //echo '<strong font color='red'>Error!</strong>' . $error_message;
            echo '</div>';
        } else if (isset($message)) {
            echo '<div class="alert alert-success">';
            echo $message;
            echo '</div>';
        }
        ?> 
    </div></div>
             
    <script src="<?php echo base_url('js/jquery.js'); ?>"></script>
    <script>
        $(document).ready(function() {
            $('.content').fadeIn(1000);
        });
    </script></div>
   </td>
 </tr>
 <tr>
   <td height="280" colspan="5" align="left" valign="top"> 

          
     </td>
     </tr>


 </table>
</body>
<?php $this->load->view('includes/footer'); ?>
</html>

