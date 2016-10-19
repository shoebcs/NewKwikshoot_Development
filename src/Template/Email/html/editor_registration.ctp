
<!DOCTYPE HTML>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<!-- Responsive Meta Tag -->
<meta content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" name="viewport">

    <title>Kwikshoot Newsletter</title><!-- Responsive Styles and Valid Styles -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"> 
    
    <style>
     body{
            width: 100%; 
            background-color: #f1f1f2; 
            margin:0; 
            padding:0; 
			font-family: 'Open Sans', sans-serif;
            -webkit-font-smoothing: antialiased;
        }
        
        p,h1,h2,h3,h4{
	        margin-top:0;
			margin-bottom:0;
			padding-top:0;
			padding-bottom:0;
        }
        
        span.preheader{display: none; font-size: 1px;}
        
        html{
            width: 100%; 
        }
        
        table{
            font-size: 14px;
            border: 0;
        }
    </style>
    
</head>


<body bgcolor="#f1f1f2" style="font-family: 'Open Sans', sans-serif;">
<div style="max-width: 660px; width: 100%; padding: 0 15px; box-sizing: border-box;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;-ms-box-sizing: border-box;margin: 20px auto;" id="newsletter-layout">
<div style="border: 1px solid #d6d6d6;margin: 0px auto; max-width: 650px; width: 100%; box-sizing: border-box;-moz-box-sizing: border-box;-webkit-box-sizing: border-box;-ms-box-sizing: border-box; background: rgb(255, 255, 255) none repeat scroll 0% 0%;" id="newsletter-layout_inner">

<table width="100%" cellspacing="0" cellpadding="12" border="0" style="border-bottom:4px solid #dd0c1f;">

<tbody>
<tr>
<td align="left">
<img style="vertical-align:top;max-width:100%;" alt="Kwikshoot" src="http://staging.veristrat.in/design/kwikshoot/logo.png">
</td>
</tr>

</tbody>
</table>
<table width="100%" cellspacing="0" cellpadding="12" border="0" style="padding:0px 0">

<tbody>
<tr>
<td align="left">
    <p><b>Hi <?php echo $editorInfo['first_name']; ?>,</b></p><br>
<p>You have been successfully Registered with Kwikshoot. Please find your Login details and login with the below link</p>
<p>http://kwikshoot.com/registration/editorlogin</p>
</td>
</tr>

</tbody>
</table>

<table width="100%" cellspacing="0" cellpadding="12" border="0" style="">
<thead style="background: rgb(182, 205, 228) none repeat scroll 0% 0%; text-align: left;">
<tr><th colspan="2" style="font-size: 17px; font-weight: 600;">Your Registration Details</th></tr>
</thead>
<tbody>
<tr>
<td align="left" style="border: 1px solid rgb(238, 238, 238);">Name</td>
<td align="left" style="border: 1px solid rgb(238, 238, 238);"><?php echo $editorInfo['first_name'] ;?><?php echo ' '; ?> <?php echo $editorInfo['last_name'] ;?></td>
</tr>

<tr>
<td align="left" style="border: 1px solid rgb(238, 238, 238);">Email</td>
<td align="left" style="border: 1px solid rgb(238, 238, 238);color:#dd0c1f;"><?php echo $editorInfo['email'];?></td>
</tr>

<tr>
<td align="left" style="border: 1px solid rgb(238, 238, 238);">Phone</td>
<td align="left" style="border: 1px solid rgb(238, 238, 238);"><?php echo $editorInfo['phone'];?></td>
</tr>

<tr>
<td align="left" style="border: 1px solid rgb(238, 238, 238);">Password</td>
<td align="left" style="border: 1px solid rgb(238, 238, 238);"><?php echo $editorInfo['password'];?></td>
</tr>

<tr>
<td align="left" style="border: 1px solid rgb(238, 238, 238);">Registration Date</td>
<td align="left" style="border: 1px solid rgb(238, 238, 238);"><?php echo $editorInfo['userCreatedDate'];?></td>
</tr>

</tbody>
</table>
<table width="100%" cellspacing="0" cellpadding="12" border="0" style="padding:20px 0">

<tbody>
<tr>
<td align="left">
<p style="font-size: 17px; line-height: 32px;"><b>Regards</b></p>
<p>Kwikshoot Team</p>
</td>
</tr>

</tbody>
</table>
</div>

</div>
</body></html>