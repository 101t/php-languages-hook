<?php 
	/**
	* Language Translator
	*/
	class Translator
	{
		private $language 	= "tr";
		private $lang 		= array();
		private $seperator 	= "=";
		private $hook_dir 	= "hooks";
		private $all_lang 	= array();

		public function languages(){
			return $this->languages;
		}

		public function language(){
			return $this->language;
		}
		
		function __construct($language)
		{
			$this->language = $language;
			$this->languages = array();
			$this->all_lang = $this->_gethook();
		}
		
		public function _($str){
			if (!array_key_exists($this->language, $this->all_lang)) {
				return $str;
			} else {

				return $this->all_lang[$this->language][$str];
			}
		}

		private function _gethook(){
			if ($handle = opendir(dirname(__FILE__)."/".$this->hook_dir)) {
				while (false !== ($entry = readdir($handle))) {
					if(substr($entry,strlen($entry)-4,strlen($entry)) == ".php"){
						$filename = basename($entry, ".php");
						require_once($this->hook_dir."/".$entry);
						$file[$filename] = $hook;
						$this->languages[$filename] = $name;
					}
				}
				closedir($handle);
			}
			return $file;
		}
	}
?>