<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class ComplementDivide extends QAndABase{
    
    public function __construct(){
        $this->name = '补数做除法';
        $this->condition = '除数接近整百，整千，整万';
        $this->description = '算出除数的补数a，a乘以被除数后，与被除数错位相加。（末位对齐）错开的位数是除数的位数。最后使用除法定位法确定小数点的位置';
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        //$potentialOp2Arr = [ 5, 25, 125 ];
        
        $this->operator1 = rand( 10, 1000 );
        $this->operator2 = pow( 10, rand( 1, 3) ) - rand( 1, 9 );
        
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