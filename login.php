<html>

<body>
<span class="btn">
		<a href="<?php if( isset($_SESSION['ot']) && isset($_SESSION['ots']) ){?>/auth.php?action=signout<?php }else{ echo $url; } ?>" class="large button"><?php if( isset($_SESSION['ot']) && isset($_SESSION['ots']) ){?>Sign Out<?php }else{ ?>Sign In<?php }?></a>
	</span>
</body>

</html>