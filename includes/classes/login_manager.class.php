<?php
/*
Questa classe necessita di database mysql e si appoggia sulla classe mysql.
*/
require_once(ROOT.'/includes/classes/mysql.class.php');
require_once(ROOT.'/includes/functions/various_functions.php');
class LOGIN_MANAGER {
var $db;
var $n_string = 16;

	public function __construct() {
		$this->db = new MYSQL();
	}


	// Funzione per la registrazione
	function register($username, $password){
		// Escape delle stringhe
		$username = $this->db->escape_string($username);
		$password = $this->db->escape_string($password);
		$result = $this->db->query("SELECT * FROM `users` WHERE `username` = '$username'");
		$result = $this->db->fetch_assoc($result);
		$result = $result['idu'];
		if(!is_null($result)){
			return false;
		}
		else{
			$result = $this->db->query("INSERT INTO `users` (`idu`, `username`, `password`, `rule`) VALUES (NULL, '$username', '$password', 'user')");
			return true;
        }
    }

    // Funzione per cancellatre un utente
    function unregister($username){
        $username = $this->db->escape_string($username);
        $result = $this->db->query("DELETE FROM `users` WHERE `username` = '$username'");
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    // Funzione per il cambio password. Serve il nome utente e la nuova password.
    function change_password($username, $password){
        $username = $this->db->escape_string($username);
        $password = $this->db->escape_string($password);
        $result = $this->db->query("UPDATE `users` SET `password` = '$password' WHERE `username` = '$username'");
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

	function login($username, $password){
		// Escape
		$username = $this->db->escape_string($username);
		$password = $this->db->escape_string($password);

		$result = $this->db->query("SELECT * FROM `users` WHERE `username` = '$username' AND `password` = '$password'");
		$result = $this->db->fetch_assoc($result);

		$idu = $result['idu'];
		$string = string_gen($this->n_string);

		$ip = $_SERVER['REMOTE_ADDR'];
		if($result['username'] == $username and $result['password'] == $password){
			$result = $this->db->query("INSERT INTO `logins` (`idl`, `idl_casual`, `idu`, `ip`) VALUES (NULL, '$string', '$idu', '$ip')");
			setcookie("idl_casual", "$string", time() + 31536000);
			return true;
		}

		else{
			return false;
		}

	}

	function is_logged(){
		if(!isset($_COOKIE['idl_casual']) or is_null($_COOKIE['idl_casual'])){
			return false;
		}

		$idl_casual = $this->db->escape_string($_COOKIE['idl_casual']);
		$result = $this->db->query("SELECT * FROM `logins` WHERE `idl_casual` = '$idl_casual'");

		$result = $this->db->fetch_assoc($result);
		if(is_null($result['idl_casual'])){
			return false;
		}

		else{
			return true;
		}
		
	}

/*
Questa funzione da falso se non è loggiato, se è loggiato da
un array con(idu, username, password, rule)
*/
	function whois_logged(){
		// Controllo se è loggiato, in caso contrario ritorno falso.
		if(!$this->is_logged()){
			return false;
		}

		// Prendo l'id dell'utente dalla tebella dei logins
		$idl_casual = $this->db->escape_string($_COOKIE['idl_casual']);
		$result = $this->db->query("SELECT * FROM `logins` WHERE `idl_casual` = '$idl_casual'");
		$result = $this->db->fetch_assoc($result);
		$idu = $result['idu'];

		// Prendo il nome dell'utente dalla tabella degli utenti con l'id dell'utente
		$result = $this->db->query("SELECT * FROM `users` WHERE `idu` = '$idu'");
		$result = $this->db->fetch_assoc($result);

		// Ritorno l'username
		return $result;
		
	}


	function logout(){
		$result = $this->whois_logged();
		$result = $result['idu'];
		setcookie('idl_casual');
		$this->db->query("DELETE FROM `logins` WHERE `idu` = $result;");
		//return true;
	}
}
?>
