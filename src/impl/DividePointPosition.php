<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class DividePointPosition extends QAndABase{
    
    public function __construct(){
        $this->name = '除法定位法';
        $this->condition = '除法计算';
        $this->description = <<<DOC
用来确定结果的整数位数。当被除数首数位小于除数首位数，所求=被除数位数-除数位数；
当被除数首数位大于除数首位数，所求=被除数位数-除数位数 + 1。当相等的时候比较下一位。
0表示十分位不是零小数，负数表示小数点到首个非零数之间0的个数。
DOC;
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        //$potentialOp2Arr = [ 5, 25, 125 ];
        
        $this->operator1 = rand( 10, 10000 );
        $this->operator2 = rand( 10, 10000 );
        
        $res = str_replace( ".", "", $this->operator1 / $this->operator2 );
        
        $display = $this->operator1 . " / " . $this->operator2 . " = " . $res . " 小数点的位置在哪？ " . $this->name . PHP_EOL;
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