<?php
	if (isset($_GET['option'])) {
		switch ($_GET['option']) {
			case 'lichsu':
				include "content/lichsu.php";
				break;
			case 'kieuloai':
				include "content/kieuloai.php";
				break;
			case 'kithuat':
				include "content/kithuat.php";
				break;
			case 'truan':
				include "content/truan.php";
				break;
			case 'nguyhiem':
				include "content/nguyhiem.php";
				break;
		}
	}else{
		include "content/home.php";
	}

?>