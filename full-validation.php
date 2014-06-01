<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact form</title>
    <?php include("form-script.php"); ?> 
    <style type="text/css">
    
    article {
			width:1024px;
						margin: 0 auto;
	}
	h1 {
				text-align:center;
		}
	ul {
						text-align:center;l
				}
	ul li {
				list-style:none;
				display:inline;
				margin:10px;
		}
    </style>
</head>
<body>

<article>

<h1>Contact form </h1>

<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="server-validation-only.php">Server validation only</a></li>
	<li><a href="full-validation.php">Full validation</a></li>
</ul>

    <h2>Full validation</h2>
    
    <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
      
        <p>
          <label>Name<sup class="required">*</sup><span class="error"><?php echo $field;?></span><br/>
            <input type="text" name="name" required/>
          </label>
        </p>
         <p>
          <label>Email<sup class="required">*</sup><span class="error"><?php echo $field;?></span><br/>
            <input type="email" name="email" required/>
          </label>
        </p>
         <p>
        	<label>Phone number<sup class="required">*</sup><span class="error"><?php echo $field;?></span><br/>
          		<input type="text" name="phone" required/>
        	</label>
        </p>
        <p>
          <label>Subject<sup class="required">*</sup><span class="error"><?php echo $field;?></span><br/>
            <input type="text" name="subject_field" required/>
          </label>
        </p>
        <p>
          <label>Message:<sup class="required">*</sup><span class="error"><?php echo $field;?></span><br/>
              <textarea name="message" required></textarea>   
          </label>
        </p>
		<p>
          <label>What is 90 + 9?<sup class="required">*</sup><span class="error"><?php echo $field; ?> <?php echo $security; ?></span><br/>
               <input type="text" name="security" required/> 
          </label>
        </p>
		<input type="submit" name="submit" value="Submit">
    
    </form>
    
    </article>
    

</body>
</html>