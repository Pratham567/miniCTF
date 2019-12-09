<?php
function get_correct($file){
	$file = "data/".$file.".data";
	$data = file_get_contents($file);
	$data = trim($data);
	$ret_val = explode(":", $data);
	$go_value = $ret_val[1];
	return $go_value;
}

function get_total($file){
	$file = "data/".$file.".data";
	$data = file_get_contents($file);
	$data = trim($data);
	$ret_val = explode(":", $data);

	return $ret_val[0];
}
//total:correct;
function update_vals($file,$cor){
	$file = "data/".$file.".data";
	$data = file_get_contents($file);

	$data = trim($data);
	$value = explode(":", $data);

	$total = (int)$value[0];
	$total +=1;
	$correct = (int)$value[1]+$cor;

	$write = (string)$total;
	$write = $write.":";
	$write = $write.(string)$correct;
	
	file_put_contents($file, $write);

	return;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Challenges</title>

	<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
</head>
<body>

	<div class="jumbotron">
		<center><h2>Welcome Hackers</h2>
		<p>Doubts? Questions? Ask us at <a href="https://chat.bckdr.in/" target="_blank">chat.bckdr.in</a></p>
		<p>Flag format : CTF{sample_flag}</p>
		</center>
	</div>

	<div class="container">
		
	<div class="panel panel-danger">
    <div class="panel-heading"><h4><b>XOR1 - 100</b><span style="float:right">Crypto</span></h4></div>
    <div class="panel-body">
    	<p>a xor b = c</p>
    	<p>c xor b = a</p> 
    	<p>Go and find the flag....</p>
    	<p><a href="challenges/xor_1" target="_blank">Link Here</a></p> 
        <p><a href="http://cryptopals.com/sets/1/challenges/3" target="_blank">Reading</a></p>
        <p align="right">Correct submission:<?php echo get_correct("crypto1");?>  Total submission:<?php echo get_total("crypto1");?>  </p>
    </div>
    <div class="panel-footer">
    	<form action method="post">
    		<div class="form-group">
    			<input type="text" name="flag1" class="form-control" placeholder="Enter Flag">
    		</div>
    		<div class="form-group">
    			<input type="submit" name="submit1" class="btn btn-primary" value="Submit">
    		</div>
    		<?php
    			if (isset($_POST['submit1']))
    			{
    				$submit_flag_1 = $_POST['flag1'];
    				$hashed_flag_1 = hash('sha256',$submit_flag_1);
    				$actual_hashed_flag_1 = 'da19fe05a13422ffd7c90e989ca80837729e9578d82ea8f480304210f5382bd5';
    				if ($hashed_flag_1 === $actual_hashed_flag_1)
    				{
    					echo "<div style='background-color:lightgreen;color:black; padding:1%;'>Correct</div>";
    					update_vals('crypto1',1);
    				}
    				else
    				{
    					echo "<div style='background-color:red;color:white; padding:1%;'>Try Again</div>";
    					update_vals('crypto1',0);
    				}
    			}
    		?>
    	</form>
    </div>
  </div>

  <div class="panel panel-danger">
    <div class="panel-heading"><h4><b>Simple Encodings - 50</b><span style="float:right">Crypto</span></h4></div>
    <div class="panel-body">
    	<p>Decode it.</p>  
    	<p><a href="challenges/ch2" target="_blank">Link here</a></p> 
    	<p align="right">Correct submission:<?php echo get_correct("crypto2");?>  Total submission:<?php echo get_total("crypto2");?>  
    </div>
    <div class="panel-footer">
    	<form action method="post">
    		<div class="form-group">
    			<input type="text" name="flag2" class="form-control" placeholder="Enter Flag">
    		</div>
    		<div class="form-group">
    			<input type="submit" name="submit2" class="btn btn-primary" value="Submit">
    		</div>
    		<?php
    			if (isset($_POST['submit2']))
    			{
    				$submit_flag_2 = $_POST['flag2'];
    				$hashed_flag_2 = hash('sha256',$submit_flag_2);
    				$actual_hashed_flag_2 = 'fe654ea8e9f5d8e23a375517bc6d7554cbe9094accee4dc3e7b212576e9023ee';
    				if ($hashed_flag_2 === $actual_hashed_flag_2)
    				{
    					echo "<div style='background-color:lightgreen;color:black; padding:1%;'>Correct</div>";
    					update_vals('crypto2',1);
    				}
    				else
    				{
    					echo "<div style='background-color:red;color:white; padding:1%;'>Try Again</div>";
    					update_vals('crypto2',0);
    				}
    			}
    		?>
    	</form>
    </div>
  </div>

  <div class="panel panel-danger">
    <div class="panel-heading"><h4><b>Web - 50</b><span style="float:right">Web</span></h4></div>
    <div class="panel-body">
    	<p>May the source be with you...</p>
    	<p align="right">Correct submission:<?php echo get_correct("web1");?>  Total submission:<?php echo get_total("web1");?>  
    </div>
    <div class="panel-footer">
    	<form action method="post">
    		<div class="form-group">
    			<input type="text" name="flag3" class="form-control" placeholder="Enter Flag">
    		</div>
    		<div class="form-group">
    			<input type="submit" name="submit3" class="btn btn-primary" value="Submit">
    		</div>
    		<?php
    			if (isset($_POST['submit3']))
    			{
    				$submit_flag_3 = $_POST['flag3'];
    				$hashed_flag_3 = hash('sha256',$submit_flag_3);
    				$actual_hashed_flag_3 = '3cc6c6515395a39ec938241af20f6e4ae39373952f05a911933080e63fb194cb';
    				if ($hashed_flag_3 === $actual_hashed_flag_3)
    				{
    					echo "<div style='background-color:lightgreen;color:black; padding:1%;'>Correct</div>";
    					update_vals('web1',1);
    				}
    				else
    				{
    					echo "<div style='background-color:red;color:white; padding:1%;'>Try Again</div>";
    					update_vals('web1',0);
    				}
    			}
    		?>
    	</form>
    </div>
  </div>

  <div class="panel panel-danger">
    <div class="panel-heading"><h4><b>Web - 100</b><span style="float:right">Web</span></h4></div>
    <div class="panel-body">
    	<p>A n00b found a site which is under development help him find the flag from the site.</p> 
        <p>Readings: <a href="https://support.google.com/webmasters/answer/6062608?hl=en" target="_blank">robots.txt</a></p>
    	<p><a href="challenges/web2" target="_blank">Link here</a></p> 
    	<p align="right">Correct submission:<?php echo get_correct("web2");?>  Total submission:<?php echo get_total("web2");?>  
    </div>
    <div class="panel-footer">
    	<form action method="post">
    		<div class="form-group">
    			<input type="text" name="flag4" class="form-control" placeholder="Enter Flag">
    		</div>
    		<div class="form-group">
    			<input type="submit" name="submit4" class="btn btn-primary" value="Submit">
    		</div>
    		<?php
    			if (isset($_POST['submit4']))
    			{
    				$submit_flag_4 = $_POST['flag4'];
    				$hashed_flag_4 = hash('sha256',$submit_flag_4);
    				$actual_hashed_flag_4 = '97e23ebdb6e904c9914f0ef443f8cfa910bf1eda8269aa129ce27acadeb1993f';
    				if ($hashed_flag_4 === $actual_hashed_flag_4)
    				{
    					echo "<div style='background-color:lightgreen;color:black; padding:1%;'>Correct</div>";
    					update_vals('web2',1);
    				}
    				else
    				{
    					echo "<div style='background-color:red;color:white; padding:1%;'>Try Again</div>";
    					update_vals('web2',0);
    				}
    			}
    		?>
    	</form>
    </div>
  </div>

  <div class="panel panel-danger">
    <div class="panel-heading"><h4><b>Web - 200</b><span style="float:right">Web</span></h4></div>
    <div class="panel-body">
    	<p>Find the flaw in logic and get the flag.</p>  
        <p>Hints: Do you know what java or c++ do if an undeclared varible is used? but zer0 is invented in INDIA</p>
        <p>Readings: <a href="http://php.net/manual/en/reserved.variables.request.php" target="_blank">$_REQUEST</a></p>
        <p>Readings: <a href="http://php.net/manual/en/function.strspn.php" target="_blank">strspn function</a></p>
        <p>Readings: <a href="http://php.net/manual/en/types.comparisons.php" target="_blank">PHP-TYPE-COMPARISONS</a></p>
    	<p><a href="challenges/web4" target="_blank">Link here</a></p> 
    	<p align="right">Correct submission:<?php echo get_correct("web4");?>  Total submission:<?php echo get_total("web4");?>  
    </div>
    <div class="panel-footer">
    	<form action method="post">
    		<div class="form-group">
    			<input type="text" name="flag6" class="form-control" placeholder="Enter Flag">
    		</div>
    		<div class="form-group">
    			<input type="submit" name="submit6" class="btn btn-primary" value="Submit">
    		</div>
    		<?php
    			if (isset($_POST['submit6']))
    			{
    				$submit_flag_6 = $_POST['flag6'];
    				$hashed_flag_6 = hash('sha256',$submit_flag_6);
    				$actual_hashed_flag_6 = '5e14169dffc81e0f4434089be2f40298396c279f0c656ba57cbd4b45b41ed4f3';
    				if ($hashed_flag_6 === $actual_hashed_flag_6)
    				{
    					echo "<div style='background-color:lightgreen;color:black; padding:1%;'>Correct</div>";
    					update_vals('web4',1);
    				}
    				else
    				{
    					echo "<div style='background-color:red;color:white; padding:1%;'>Try Again</div>";
    					update_vals('web4',0);
    				}
    			}
    		?>
    	</form>
    </div>
  </div>

  <div class="panel panel-danger">
    <div class="panel-heading"><h4><b>XOR2 - 150</b><span style="float:right">Crypto</span></h4></div>
    <div class="panel-body">
    	<p>a xor b = c</p>
    	<p>c xor b = a</p> 
    	<p>Go and find the flag....</p>
    	<p><a href="challenges/xor_2" target="_blank">Link Here</a></p> 
    	<p><a href="http://cryptopals.com/sets/1/challenges/6" target="_blank">Hint</a></p>  	
    	<p align="right">Correct submission:<?php echo get_correct("crypto3");?>  Total submission:<?php echo get_total("crypto3");?>  
    </div>
    <div class="panel-footer">
    	<form action method="post">
    		<div class="form-group">
    			<input type="text" name="flag7" class="form-control" placeholder="Enter Flag">
    		</div>
    		<div class="form-group">
    			<input type="submit" name="submit7" class="btn btn-primary" value="Submit">
    		</div>
    		<?php
    			if (isset($_POST['submit7']))
    			{
    				$submit_flag_7 = $_POST['flag7'];
    				$hashed_flag_7 = hash('sha256',$submit_flag_7);
    				$actual_hashed_flag_7 = 'cfbe8eed826449a865988ac67157128e4616960ab0dd7424e94cef78d581541e';
    				if ($hashed_flag_7 === $actual_hashed_flag_7)
    				{
    					echo "<div style='background-color:lightgreen;color:black; padding:1%;'>Correct</div>";
    					update_vals('crypto3',1);
    				}
    				else
    				{
    					echo "<div style='background-color:red;color:white; padding:1%;'>Try Again</div>";
    					update_vals('crypto3',0);
    				}
    			}
    		?>
    	</form>
    </div>
  </div>

  <div class="panel panel-danger">
    <div class="panel-heading"><h4><b>Reversing - 200</b><span style="float:right">Reversing</span></h4></div>
    <div class="panel-body">
        <p>Go and find the flag....</p>
        <p><a href="challenges/hide" target="_blank">Link Here</a></p>
        <p><a href="https://www.cs.cmu.edu/~gilpin/tutorial/" target="_blank">Hint here</a></p>     
        <p align="right">Correct submission:<?php echo get_correct("rev1");?>  Total submission:<?php echo get_total("rev1");?>  
   </div>
    <div class="panel-footer">
        <form action method="post">
            <div class="form-group">
                <input type="text" name="flag8" class="form-control" placeholder="Enter Flag">
            </div>
            <div class="form-group">
                <input type="submit" name="submit8" class="btn btn-primary" value="Submit">
            </div>
            <?php
                if (isset($_POST['submit8']))
                {
                    $submit_flag_8 = $_POST['flag8'];
                    $hashed_flag_8 = hash('sha256',$submit_flag_8);
                    $actual_hashed_flag_8 = 'd212613cfeb51e93b3f66eb171b0b84a76909265e2e54f3fa6ad0da083d3bf76';
                    if ($hashed_flag_8 === $actual_hashed_flag_8)
                    {
                        echo "<div style='background-color:lightgreen;color:black; padding:1%;'>Correct</div>";
                        update_vals('rev1',1);
                    }
                    else
                    {
                        echo "<div style='background-color:red;color:white; padding:1%;'>Try Again</div>";
                        update_vals('rev1',0);
                    }
                }
            ?>
        </form>
    </div>
  </div>

    <div class="panel panel-danger">
    <div class="panel-heading"><h4><b>Pwning - 150</b><span style="float:right">Pwning</span></h4></div>
    <div class="panel-body">
        <p>Connect to given service and find the flag</p>
        <p>nc 139.59.10.24 1337</p>
        <p><a href = "challenges/over_hand">Executable file</a></p>
        <p><a href = "challenges/over.c">Source file</a></p>
        <p><a href = "https://dhavalkapil.com/blogs/Buffer-Overflow-Exploit/" target="_blank">Reading</a></p>
        <p align="right">Correct submission:<?php echo get_correct("pwn1");?>  Total submission:<?php echo get_total("pwn1");?>  
   </div>
    <div class="panel-footer">
        <form action method="post">
            <div class="form-group">
                <input type="text" name="flag9" class="form-control" placeholder="Enter Flag">
            </div>
            <div class="form-group">
                <input type="submit" name="submit9" class="btn btn-primary" value="Submit">
            </div>
            <?php
                if (isset($_POST['submit9']))
                {
                    $submit_flag_9 = $_POST['flag9'];
                    $hashed_flag_9 = hash('sha256',$submit_flag_9);
                    $actual_hashed_flag_9 = '51db924cb8d4c4924cdd580f6946b359d413cda5cb2551e81c74cd2ab0f70c64';
                    if ($hashed_flag_9 === $actual_hashed_flag_9)
                    {
                        echo "<div style='background-color:lightgreen;color:black; padding:1%;'>Correct</div>";
                        update_vals('pwn1',1);
                    }
                    else
                    {
                        echo "<div style='background-color:red;color:white; padding:1%;'>Try Again</div>";
                        update_vals('pwn1',0);
                    }
                }
            ?>
        </form>
    </div>
  </div>
	</div>

</body>
</html>
