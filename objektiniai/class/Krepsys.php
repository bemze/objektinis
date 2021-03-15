<?php

class Krepsys
{

    public $visiGrybai;
    public $svoris;
    public $sveikas;

    public function prideti($gryboSvoris)
    {
        $this -> sveikas++;
        $this->svoris += $gryboSvoris;
    }

  

}
