<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class FractionCompareDiff extends QAndABase{
    
    public function __construct(){
        $this->name = '差分法比较分数大小';
        $this->condition = '分子分母比较接近且都比另一个大';
        $this->description = '分子减分子，分母减分母，与数字小的分数作比较。';
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        //$potentialOp2Arr = [ 1, 2, 5 ];
        
        $numerator1 = rand( 10, 10000 );
        $numerator2 = $numerator1 - rand( 1, 9 );
        
        $denominator1 = rand( 10, 10000 );
        $denominator2 = $denominator1 - rand( 1, 9 );
        
        
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