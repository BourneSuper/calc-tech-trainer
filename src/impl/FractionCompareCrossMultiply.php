<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class FractionCompareCrossMultiply extends QAndABase{
    
    public function __construct(){
        $this->name = '交叉相乘法比较分数大小';
        $this->condition = '';
        $this->description = '分子分母交叉相乘后比较';
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        //$potentialOp2Arr = [ 1, 2, 5 ];
        
        $numerator1 = rand( 10, 100 );
        $numerator2 = rand( 10, 100 );
        
        $denominator1 = rand( 10, 100 );
        $denominator2 = rand( 10, 100 );
        
        
        $this->operator1 = $numerator1 / $denominator1;
        $this->operator2 = $numerator2 / $denominator2;
        
        $display = "比较大小" . $numerator1 . " / " . $denominator1 . " ? " . $numerator2 . " / " . $denominator2 . " " . $this->name . PHP_EOL;
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