<?php

namespace BS\CTT\impl;

use BS\CTT\QAndABase;

/**
 * @author Administrator
 * 
 */
class BinaryLinearEquationWithTwoUnkwon extends QAndABase{
    
    public function __construct(){
        $this->name = '二元一次方程公式';
        $this->condition = '';
        $this->description = <<<DOC
第一行系数和常数是a、b、c，第一行是d、e、f， 
{ x =（ce - bf ）/（ae - db ），
{ y = (af - dc ）/（ ae - db ）
简化记为 常y减/xy减，x常减/xy减
DOC;
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayQuestion()
     */
    public function displayQuestion(){
        //$potentialOp1Arr = [ 25, 125, 625 ];
        //$potentialOp2Arr = [ 1, 2, 5 ];
        
        $a = rand( 1, 16 );
        $b = rand( 1, 16 );
        $c = rand( 1, 16 );
        $d = rand( 1, 16 );
        $e = rand( 1, 16 );
        $f = rand( 1, 16 );
        
        $x = ( $c * $e - $f * $b ) / ( $a * $e - $b * $d );
        $y = ( $a * $f - $c * $d ) / ( $a * $e - $b * $d );
        $this->answer = 'x= ' . $x . ' y= ' . $y;
        
        $display = <<<DOC
{ %sx + %sy = %s
{ %sx + %sy = %s 求x=? , y=?
DOC;
        $display = sprintf( $display, $a, $b, $c, $d, $e, $f );
        
        $display .= ' ' . $this->condition . PHP_EOL . ' || ' . $this->description . PHP_EOL;
        echo $display;
        
    }
    
    /**
     * {@inheritDoc}
     * @see \BS\IC\QAndABase::displayAnswer()
     */
    public function displayAnswer(){
        
        echo $this->answer . PHP_EOL;
        
    }
    
    
}

?>