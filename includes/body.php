<div>
	<?php

	$current_page = 'home.php';
	if ( isset( $_GET['page'] ) && '' != $_GET['page'] ) {
		switch ( $_GET['page'] ) {
			case 'home':
				$current_page = 'home.php';

				break;

			case 'about':
				$current_page = 'about.php';

				break;

			case 'donate':
				$current_page = 'donate.php';

				break;

			case 'volunteer':
				$current_page = 'volunteer.php';

				break;

			default:
				$current_page = 'home.php';

				break;
		}
	}

	require './pages/' . $current_page;

	?>
</div>
