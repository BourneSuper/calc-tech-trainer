<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class ComplementSubtraction extends QAndABase{
    
    public function __construct(){
        $this->name = '补数做减法';
        $this->condition = '减法计算';
        $this->description = '先将被减数凑成整10数，根据整十数的减法特性算减法（前位求9的补数，末位求10的补数）。';
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        //$potentialOp2Arr = [ 0.001, 0.01, 0.1, 1, 10, 100 ];
        
        $this->operator1 = rand( 10, 2000 );
        $this->operator2 = rand( 10, 2000 );
        
        $display = $this->operator1 . " - " . $this->operator2 . " = ? " . $this->name . PHP_EOL;
        $display .= ' ' . $this->condition . ' || ' . $this->description . PHP_EOL;
        echo $display;
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayAnswer()
     */
    public function displayAnswer(){
        
        $this->answer = $this->operator1 - $this->operator2;
        
        echo $this->operator1 . " - " . $this->operator2 . " = " . $this->answer . PHP_EOL;
        
    }
    
    
}

?>