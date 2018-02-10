<?php

/**
 * Description of BanHelper
 *
 * @author mrgab
 */
class Banhelper {

   

    public function index($param = FALSE) {

        if (!$param) {
            echo "- generated default route - \n";

            $gen_array =  array ("admin", "server", "moderator",  "system",  "owner", "TeamSpeakUser");





            echo "results: \n\n\n ";
           
            foreach ($gen_array as $key => $value){
            $this->content_generation($value);
            echo "\n";
            };
            echo "\n\n";
            echo "recommend:\n";
            echo "Default name patern / allowed chars - .*.*[^A-Za-z0-9\s_-\(\)]+\n";
            echo 'Disable [] characters'.".*[\[\]].*\n";
        } else {
            $this->content_generation($param);
        }
    }

    protected function def_alphabet() {
        $alphabet = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
        return $alphabet;
    }

    protected function spec_alphabet() {

        $spec_alphabet = array("a" => "aA4@", "b" => "bB", "c" => "cC", "d" => "dD", "e" => "eE3", "f" => "fF", "g" => "gG", "h" => "hH", "i" => "iI1", "j" => "jJ", "k" => "kK", "l" => "lL", "m" => "mM", "n" => "nN", "o" => "oO0", "p" => "pP", "q" => "qQ", "r" => "rR", "s" => "sS", "t" => "tT", "u" => "uU", "v" => "vV", "w" => "wW", "x" => "xX", "y" => "yY", "z" => "zZ");
        return $spec_alphabet;
    }

    protected function wraper($param) {

        $return_str = "[" . $param . "]";
        return $return_str;
    }

    private function content_generation($input) {

        $alphabet = $this->spec_alphabet();
        $rev_alphabet = $this->def_alphabet();

        $string_explod = str_split(strtolower($input));

        $final = ".*";
        foreach ($string_explod as $key => $value) {

            if (in_array($value, $rev_alphabet)) {
                $this_character = $alphabet[$value];
                $final = $final . $this->wraper($this_character);
            }
            else {
                die('Unsupported chacracter');
            }
        }
        $final = $final . ".*";
        echo $final;
    }
}
$ban_help = new Banhelper;
///my reccomendation

$ban_help->index();
////// optional value:
/// usage: Banhelper->index('yourStringToTranslateTSRP');
 echo "- generated costume value - \n";
$ban_help->index('coookiemonster');
