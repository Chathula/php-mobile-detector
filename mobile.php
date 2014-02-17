<?php  

/* 

Coded By: Chathula Sampath Perera
Facebook: http//facebook.com/c.sampathperera
Skype: chathula.sampath

*/

class Mobile {

        protected $device;
        protected $mobile;

        public $isMobile = false;
        public $isAndroid = false;
        public $isBlackberry = false;
        public $isIphone = false;
        public $isIpod = false;
        public $isIpad = false;
        public $isOperaMini = false;
        public $isPalm = false;
        public $isWindows = false;
        public $isOther = false;

        public $isMozilla = false;

        protected $devices = array(
                "android",
                "blackberry",
                "iphone",
                "ipod",
                "ipad",
                "avantgo",
                "blazer",
                "elaine",
                "hiptop",
                "palm",
                "plucker",
                "xiino",
                "windows ce",
                "iemobile",
                "ppc",
                "smartphone",
                "opera mini",
                "kindle",
                "mobile",
                "mmp",
                "midp",
                "o2",
                "pda",
                "pocket",
                "psp",
                "symbian",
                "smartphone",
                "treo",
                "up.browser",
                "up.link",
                "vodafone",
                "wap",
        );



        public function __construct() {
                $this->device = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : "";

                if (isset($_SERVER['HTTP_X_WAP_PROFILE'])|| isset($_SERVER['HTTP_PROFILE'])) {
                        $this->isMobile = true;
                }

                foreach ($this->devices as $device) {
                        $this->mobile = $device;
                }

                if (preg_match("/". $this->mobile ."/", $this->device)) {
                        $this->isMobile = true;
                }

                if (stristr($this->device, "android")) {
                                $this->isMobile = true;
                                $this->isAndroid = true;
                        } 

                        if (stristr($this->device, "blackberry")) {
                                $this->isMobile = true;
                                $this->isBlackberry = true;
                        } 

                        if (stristr($this->device, "iphone")) {
                                $this->isMobile = true;
                                $this->isIphone = true;
                        } 

                        if (stristr($this->device, "ipod")) {
                                $this->isMobile = true;
                                $this->isIpod = true;
                        } 

                        if (stristr($this->device, "ipad")) {
                                $this->isMobile = true;
                                $this->isIpad = true;
                        } 

                        if (stristr($this->device, "opera mini")) {
                                $this->isMobile = true;
                                $this->isOperaMini = true;
                        } 

                        if (preg_match("/avantgo|blazer|elaine|hiptop|palm|plucker|xiino/", $this->device)) {
                                $this->isMobile = true;
                                $this->isPalm = true;
                        } 

                        if (preg_match("/iemobile|ppc|smartphone|windows ce/", $this->device)) {
                                $this->isMobile = true;
                                $this->isWindows = true;
                        } 

                        if (preg_match("/kindle|mobile|mmp|midp|o2|pda|pocket|psp|symbian|smartphone|treo|up.browser|up.link|vodafone|wap/", $this->device)) {
                                $this->isMobile = true;
                                $this->isOther = true;
                        }
                } 

}

?>
