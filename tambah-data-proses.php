<?php
	if (isset($_POST['tambah'])) {	
		include ("koneksi.php");

		$user_name = $_POST['user_name'];
		$sandi	= $_POST['sandi'];
			   

	    // prepare data
	    $info["cn"] = $user_name;
	    $info["sn"] = $user_name;
	    $info["objectclass"] [0]= "inetOrgPerson";
	    $info["objectclass"] [1]= "radiusprofile";
	    $info["userPassword"] = $sandi;
	    $info["uid"] = $user_name;

	    $cn = $user_name;
	    $UserName		= $user_name;
		$Attribute		= "Password";	
		$op			= "==";	
		$Value			= $sandi;

	    // add data to directory
	   

	    if ($ldap_con) {
		    // bind with appropriate dn to give update access
		    $data = ldap_bind($ldap_con, $ldap_dn, $ldap_pass);
		    $data = ldap_add($ldap_con, "cn=$user_name, $ldap_dn2", $info);
		    $input = mysql_query ("INSERT INTO radcheck VALUES(NULL, '$UserName', '$Attribute', '$op', '$Value')");
		    
		    echo "<script>alert('BERHASIL ....');</script>";
		    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
		}else{
			echo "<script>window.history.back()</script>";
		}
	}
	
?>
