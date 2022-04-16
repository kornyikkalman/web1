<?php

class Config {

    private  $vars;
    private static $instance;

    /**
     * Konstruktor -> mindig megadunk egy kulcs, és egy hozzátartozó érték párt.
     **/
    public function __construct() {
        $this->vars = [];
    }

    /**
     *Beállitsuk a megadott kulcsoknak az értékeket
     **/
    public function set ($key, $value) {
        if(! isset($this->vars[$key])) {
            $this->vars[$key] = $value;
        }
    }

    /**
     *A get methoddal eltudjuk érni bárhonnan a projektből, hogy melyik beállitásnak mit adtunk meg.
     * Igy tudunk kölönböző teszteket végezni.
     **/
    public function get ($key) {
        if(isset($this->vars[$key])) {
            return $this->vars[$key];
        }
    }

    /**
     * Singleton method - igy biztosak lehetünk benne, hogy nem lesz két konfigurációnk egyszerre.
     **/
    public static function singleton () {
        if(! isset(self::$instance)) {
            $temporaryclass = __CLASS__;
            self::$instance = new $temporaryclass;
        }
        return self::$instance;
    }
}