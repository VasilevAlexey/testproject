<?php
require_once 'Api.php';
require_once 'CalculationApi.php';

class CalculationApi extends Api
{
    public $apiName = 'calculation';

    /**
     * Метод GET
     * Заглушка
     */
    public function indexAction(){
        echo "Введите два числа";
    }


    /**
     * Метод POST
     * заглушка
     */
    public function viewAction() {
        {


            echo "Method POST, view";
        }
    }

    /**
     * Метод POST
     * Вычисления
     */
    public function sumAction() {
        {
            $a = (int)$this->requestParams["a"];
            $b = (int)$this->requestParams["b"];
            $c = $a + $b;
            $fOut = ".";
            if ($c >= 0) {
                $factorial = $this->factorial($c);
                $fOut =  ". Её факториал равен " . (string)$factorial . ".";
            }
            $outString = "Сумма чисел равна " . (string)$c . $fOut;
            echo $outString;
        }
    }

    public function factorial($n)
    {
        if ($n == 0) {
            return 1;
        } else {
            return $n * $this->factorial($n - 1);
        }
    }

    /**
     * Метод PUT
     * Заглушка
     */
    public function updateAction() {
        echo "Method PUT";
    }

    /**
     * Метод DELETE
     * Заглушка
     */
    public function deleteAction() {}

}