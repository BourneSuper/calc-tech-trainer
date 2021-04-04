<?php
/**
 * @author BourneSuper
 */
include 'vendor/autoload.php';


$displayHelpBool = in_array( '-h', $argv )  ? true : false ;

if( $displayHelpBool ){
    displayHelp();
    return ;
}


welcome();

runCommand();

function runCommand(){
    $keepRunBool = true;
    $configArr = include 'src/config.php';
    
    //0 = init, 1 = display question, 2 = display answer
    $stateArr = [ 0 => 1, 1 => 2, 2 => 1 ];
    $state = 0;
    
    fwrite( STDOUT, "Please Enter 'start' to start training : " );
    
    $qAndA = null;
    while( $keepRunBool ){
        
        $inputStr = trim( fgets( STDIN ) );
        
        if( $inputStr == 'quit' ){
            $keepRunBool = false;
            echo "bye" . PHP_EOL;
            return ;
        }
        
        //0 = init, 1 = displaying question, 2 = displaying answer 
        if( $state == 0 && $inputStr = 'start' ){
            
            $qAndA = getOneQAndAInstance( $configArr );
            
            $qAndA->displayQuestion();
            
            $state = 1;
            
            continue;
        }
        
        if( $state == 1 ){
            $qAndA->displayAnswer();
            
            $state = 2;
            
            continue;
            
        }
        
        if( $state == 2 ){
            $qAndA = getOneQAndAInstance( $configArr );
            
            $qAndA->displayQuestion();
            
            $state = 1;
            
            continue;
        }
        
        
        
    }
    
}

function getOneQAndAInstance( $configArr ){
    
    $total = count( $configArr['qAndAClassNameArr'] );
    
    $className = $configArr['qAndAClassNameArr'][ rand( 0, $total -1 ) ]; 
    
    $fullClassName = $configArr['qAndAClassNamespace'] . $className;
    
    return new $fullClassName();
    
}

function welcome(){
    echo "------------------------------------------------------------------------------" . PHP_EOL;
    echo "    Welcome to calc tech trainer. veserion:1.0" . PHP_EOL;
    echo "    Input 'ctrl + backspace' to backspace.". PHP_EOL;
    echo "    Input 'quit' to quit.". PHP_EOL;
    echo "------------------------------------------------------------------------------" . PHP_EOL;
}

function displayHelp( ){
    echo "    usage: press enter" . PHP_EOL;

}


?>