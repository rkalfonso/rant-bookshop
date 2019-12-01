<?php 

$longString = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do 
eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";


      //  echo readMoreHelper($longString);


      //  function readMoreHelper($story_desc, $chars = 100) {
      //      $story_desc = substr($story_desc,0,$chars);  
      //      $story_desc = substr($story_desc,0,strrpos($story_desc,' '));  
      //      $story_desc = $story_desc." <a href='#'>Read More...</a>";  
      //      return $story_desc;  
      //  } 


 $story_desc = substr($longString,0,100);  
 $story_desc = substr($story_desc,0,strrpos($story_desc,' '));  
 echo $story_desc."<a href='#'>Read More...</a>";


?>