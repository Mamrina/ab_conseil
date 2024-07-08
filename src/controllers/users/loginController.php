<?php

/**
 * Check if the user is still connected
 */
function limitAttemps()
{
	global $router;

	if (!empty($_SESSION['attemps']['time'])) {
		$date = new DateTimeImmutable();
		$now = $date->getTimestamp();
		$diff = $now - $_SESSION['attemps']['time'];

		if ($diff > 300) {
			unset($_SESSION['attemps']);
		} else {
			alert('Trop de tentatives, veuillez réessayer dans 5 minutes');
			header('Location: ' . $router->generate('home'));
			die;
		}
	} else {
		if (empty($_SESSION['attemps'])) {
			$_SESSION['attemps']['count'] = 1;
		} else if (!empty($_SESSION['attemps']['count']) && $_SESSION['attemps']['count'] < 5) {
			$_SESSION['attemps']['count']++;
		} else if ($_SESSION['attemps']['count'] >= 5) {
			$date = new DateTimeImmutable();
			$_SESSION['attemps']['time'] = $date->getTimestamp();
      //date d'expiration
		}
	}
}

/**
 * Check connection admin with email and password
 * and verify if the admin is not a spam robot
*/
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!empty($_POST['firstname'])) {
    alert('Bravo, vous êtes connecté !', 'success');
    header('Location: ' . $router->generate('home'));
    die;
  }

  if (!empty($_POST['email']) && !empty($_POST['pwd'])) {
    $accessUser = checkUserAccess();
    if (!empty($accessUser)) {
      $_SESSION['users'] = [
        'id' => $accessUser->id,
        'last_login' => date('Y-m-d H:i:s')
      ];
      saveLastLogin($accessUser->id);
      alert('Vous êtes connectée.', 'success');
      header('Location: ' . $router->generate('dashboard'));
      die;
    } else {
      limitAttemps();
      alert('Identifiants incorrects.', 'danger');
    }
  }
}









