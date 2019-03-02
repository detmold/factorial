<?php 
class Factorial {

    private function calculate($n) {
        $sum = 0;
        $exp = 1;
        $result = 0;
        do {
            $sum += $result = floor( $n / pow(5, $exp) );
            $exp++;
        } while ($result > 0);
        return $sum;
    }

    public function init() {
        $t = stream_get_line(STDIN, 20000000000, PHP_EOL);
        for ($j=0; $j<$t; $j++) {
            $number = stream_get_line(STDIN, 10000000, PHP_EOL);
            echo $this->calculate($number) . PHP_EOL;
        }
    }

}


$factorial = new Factorial();
$factorial->init();
?>