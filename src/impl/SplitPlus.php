<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class MakeIntegerPlus extends QAndABase{
    
    public function __construct(){
        $this->name = '凑整法做加法';
        $this->condition = '加法计算';
        $this->description = '将一个数凑成整10数，另一个数相应变换。口诀：一边加，一边减';
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        //$potentialOp2Arr = [ 0.001, 0.01, 0.1, 1, 10, 100 ];
        
        $this->operator1 = rand( 10, 1000 );
        $this->operator2 = rand( 10, 1000 );
        
        $display = $this->operator1 . " + " . $this->operator2 . " = ? " . $this->name . PHP_EOL;
        $display .= ' ' . $this->condition . ' || ' . $this->description . PHP_EOL;
        echo $display;
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayAnswer()
     */
    public function displayAnswer(){
        
        $this->answer = $this->operator1 + $this->operator2;
        
        echo $this->operator1 . " + " . $this->operator2 . " = " . $this->answer . PHP_EOL;
        
    }
    
    
}

?>