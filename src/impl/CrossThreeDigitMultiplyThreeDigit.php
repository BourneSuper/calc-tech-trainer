<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class CrossThreeDigitMultiplyThreeDigit extends QAndABase{
    
    public function __construct(){
        $this->name = '十字交叉法做三位数位数乘以三位数';
        $this->condition = '两个数都是三位数';
        $this->description = '列竖式，头乘头 // 两两交叉相乘// 三个交叉相乘 // 两两交叉相乘 // 尾乘尾';
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        //$potentialOp2Arr = [ 1, 2, 5 ];
        
        $this->operator1 = rand( 100, 999 );
        $this->operator2 = rand( 100, 999 );
        
        $display = $this->operator1 . " * " . $this->operator2 . " = ? " . $this->name . PHP_EOL;
        $display .= ' ' . $this->condition . ' || ' . $this->description . PHP_EOL;
        echo $display;
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayAnswer()
     */
    public function displayAnswer(){
        
        $this->answer = $this->operator1 * $this->operator2;
        
        echo $this->operator1 . " * " . $this->operator2 . " = " . $this->answer . PHP_EOL;
        
    }
    
    
}

?>