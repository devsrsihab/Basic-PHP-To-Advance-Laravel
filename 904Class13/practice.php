<?php 

/*=============== Q.2 ================
 *Sample String :
'Tomorrow I \'ll learn PHP global variables.'
'This is a bad command : del c:\\*.*'
Expected Output :
Tomorrow I 'll learn PHP global variables.
This is a bad command : del c:\*.* */

// echo 'Tomorrow I \'ll learn PHP global variables';
// echo 'this is a bad command \: del c:\\*.\*'; =============== Q2 end ================
/**
 *=============== Q.3 ================
 * 3. $var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as an anchor text within an HTML document. Go to the editor
 *Sample Output :

 *PHP Tutorial
 *PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.
 *Go to the PHP Tutorial.
 */
//ans. 
//$heading = 'PHP Tutorial'; =============== Q3 end ================





?>
<html>
<body>
    <form action="" method="post">
      <input type="text" name="type_here">
      <input type="submit" value="Submit">
    </form>
  <?php  echo $_POST['type_here'] ?>
</body>
</html>