<?php
	if(isset($_GET['id'])){
		include ("koneksi.php");

		$id = $_GET['id'];

		if ($ldap_con) {
		    // bind with appropriate dn to give update access
		    $data = ldap_bind($ldap_con, $ldap_dn, $ldap_pass);
		    $data = ldap_delete($ldap_con, "cn=$id, $ldap_dn2");
		    $del = mysql_query("DELETE from radcheck where UserName='$id'");
		    echo "<script>alert('BERHASIL ....');</script>";
		    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
		}else{
			echo "<script>alert('GAGAL ....');</script>";
		    echo "<meta http-equiv='refresh' content='0; url=index.php'>";		}
	}
?>
