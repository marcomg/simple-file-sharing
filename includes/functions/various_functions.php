<?php
/*
Questo file contiene varie funzioni del core
*/

/*
Funzione per avere una stringa alfanumerica di n caratteri. Lanciarla dando come argomento un numero. Si ottiene una stringa.
*/
function string_gen($long_string_gen){
	$string_gen=NULL;
	for ($i=1; $i<=$long_string_gen; $i++){
		if ($i % 2){
			$string_gen = $string_gen . chr(rand(97,122));
		}
		else{
			$string_gen = $string_gen . rand(0,9);
		}
	}
	return $string_gen;
}

/*
Funzione per avere l'elenco dei file contenuti in una direcoty. Si da come argomento una stringa con la directory e si ottiene un array con i nomi dei file
*/
function elencafiles($dirname){
	$arrayfiles=Array();
	if(file_exists($dirname)){
		$handle = opendir($dirname);
		while (false !== ($file = readdir($handle))) { 
			if(is_file($dirname.$file)){
				array_push($arrayfiles,$file);
			}
		}
		$handle = closedir($handle);
	}
	sort($arrayfiles);
	return $arrayfiles;
}

/*
Funzione per avere la dimensione di un file in bytes. Esmpio di input 8m 8M 8k 18k
*/
function return_bytes($val) {
    $val = trim($val);
    $last = $val{strlen($val)-1};
    switch($last) {
        case 'k':
        case 'K':
            return (int) $val * 1024;
            break;
        case 'm':
        case 'M':
            return (int) $val * 1048576;
            break;
        case 'g':
        case 'G':
            return (int) $val * 1073741824;
        break;
        
        default:
            return $val;
    }
}


/*
Funzione per avere una dimensione umana di un file partendo dai bytes si ottiene fino ai TB
*/
function return_human_value($val){
    if(!is_numeric($val)){
        return false;
    }
    if($val >= 1024){
        $val = $val/1024;
        if($val < 1024){
            return(round($val, 1).'KB');
        }
    }
    
    if($val >= 1024){
        $val = $val/1024;
        if($val < 1024){
            return(round($val, 1).'MB');
        }
    }
    
    if($val >= 1024){
        $val = $val/1024;
        if($val < 1024){
            return(round($val, 1).'GB');
        }
    }
    
    if($val >= 1024){
        $val = $val/1024;
        if($val < 1024){
            return(round($val, 1).'TB');
        }
    }
    
    else{
        return(round($val).'B');
    }

}
?>
