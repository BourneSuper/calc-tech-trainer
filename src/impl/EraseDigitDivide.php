<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class EraseDigitDivide extends QAndABase{
    
    public function __construct(){
        $this->name = '截位法--除法';
        $this->condition = '除法计算';
        $this->description = '同增同减。先估算出商，然后乘以截去的部分，最后加或减到被除数上。';
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        //$potentialOp2Arr = [ 1, 2, 5 ];
        
        $this->operator1 = rand( 10, 10000 );
        $this->operator2 = rand( 10, 10000 );
        
        $display = $this->operator1 . " / " . $this->operator2 . " = ? " . $this->name . PHP_EOL;
        $display .= ' ' . $this->condition . ' || ' . $this->description . PHP_EOL;
        echo $display;
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayAnswer()
     */
    public function displayAnswer(){
        
        $this->answer = $this->operator1 / $this->operator2;
        
        echo $this->operator1 . " / " . $this->operator2 . " = " . $this->answer . PHP_EOL;
        
    }
    
    
}

?>