<?php 
 class Control {
private		$Server  ; 
private		$UserName;
private		$Password;
private		$DBname  ;
	
////////                  \\\\\\\\	

function 	  __construct(){
	
				
		$Server   = "localhost"; 
		$UserName =  "test";
		$Password =  "test";
		$DBname   =  "FinalState";
				
				
	 			}
	 			
function  getmysqliobj()
{
	   
		return	new mysqli($Server, $UserName, $Password, $DBname)	;
}	 			



function	 __destruct(){
					 }	 
 
 }

?>