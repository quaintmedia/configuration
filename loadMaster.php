<?php
class loadMaster {
	private $m_initArray;
	function __construct() {
		$this->m_initArray = parse_ini_file( "/var/www/html/conf/load_master.ini", true );
	}

	public function getConfig( $strBaseName ) {
		return $this->m_initArray['base'] + $this->m_initArray[$strBaseName];
	}
}
?>
