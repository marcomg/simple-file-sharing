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
	function register($username, $password, $rule='user'){
		// Escape delle stringhe
		$username = $this->db->escape_string($username);
		$password = $this->db->escape_string($password);
		$rule = $this->db->escape_string($rule);
		$result = $this->db->query("SELECT * FROM `users` WHERE `username` = '$username'");
		$result = $this->db->fetch_assoc($result);
		$result = $result['idu'];
		if(!is_null($result)){
			return false;
		}
		else{
			$result = $this->db->query("INSERT INTO `users` (`idu`, `username`, `password`, `rule`) VALUES (NULL, '$username', '$password', '$rule')");
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
			$result = $this->db->query("INSERT INTO `sessions` (`ids`, `ids_casual`, `idu`, `ip`) VALUES (NULL, '$string', '$idu', '$ip')");
			setcookie("ids_casual", "$string", time() + 31536000);
			return true;
		}

		else{
			return false;
		}

	}

	function is_logged(){
		if(!isset($_COOKIE['ids_casual']) or is_null($_COOKIE['ids_casual'])){
			return false;
		}

		$ids_casual = $this->db->escape_string($_COOKIE['ids_casual']);
		$result = $this->db->query("SELECT * FROM `sessions` WHERE `ids_casual` = '$ids_casual'");

		$result = $this->db->fetch_assoc($result);
		if(is_null($result['ids_casual'])){
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
        // Controllo se sono settati correttamente i cookies. In caso contrario ritorno falso
        if(!isset($_COOKIE['ids_casual']) or is_null($_COOKIE['ids_casual'])){
			return false;
        }
        
        // Controllo se l'utente è loggiato
		$ids_casual = $this->db->escape_string($_COOKIE['ids_casual']);
		$result = $this->db->query("SELECT * FROM `sessions` WHERE `ids_casual` = '$ids_casual'");
		$result = $this->db->fetch_assoc($result);
		if(is_null($result['ids_casual'])){
			return false;
		}
		/*else{
			return true;
		}*/
        
		// Prendo il nome dell'utente dalla tabella degli utenti con l'id dell'utente
		$result = $this->db->query("SELECT * FROM `users` WHERE `idu` = '".$result['idu']."'");
		$result = $this->db->fetch_assoc($result);

		// Ritorno l'array con le info sull'utente
		return $result;
		
	}


	function logout(){
		$result = $this->whois_logged();
		$result = $result['idu'];
		setcookie('ids_casual');
		$this->db->query("DELETE FROM `sessions` WHERE `idu` = $result;");
		//return true;
	}
}
?>
