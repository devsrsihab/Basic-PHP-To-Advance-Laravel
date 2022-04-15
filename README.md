# Basic PHP To Advance Laravel

![Laravel_Framework-copy](https://user-images.githubusercontent.com/91025640/162565321-22c6509d-0931-41fa-a3f7-6504002479f0.jpg)


<!-- class-1 overview start -->
### Class-1 Overview

<details>
  <summary>Click Here</summary>

#### 1. Github.

- What is Git & Github

- Why need Git & Github

- Git bash Downloads & Installation

- Create an Account on Github

- Create project Local to Online

- Create Project Online

- How to fork any github project from another account.

#### 2. IDE / Code Editor.

 - Vs Code Downloads.

 - Vs Code Editor keyboard shortcuts.
  
 - Important Package installation



</details>
<!-- class-1 overview end -->

<!-- class-2 overview start -->
### Class-2 Overview

<details>

<summary>Click Here</summary>

#### 1. PHP Language.

- History of php.

- How does php work.

- Power of php.
  
#### 2. Environment setup, Code Structure & Run Code.

- Server setup.

- Code syntax & run code.

- How to write Php code in html.

#### 3. Variable.

- What is Variable?.

- Declaration rules of common variables.

- Declaration rules of Constant variables 
   
   ``` 
   define(name, value, case-insensitive) 
   ```

- Different between variable & constant.


#### 4. Print Way.

- Concat string, inverted comma.

- echo, Printf, sprintf.


#### 5. Different types of Data types.

- Most commonly used scalar (মৌলিক) data types - (String, Integer, float, Boolean).

- Compound (যৌগিক) data types - (Array, Object).

- Null, Resource-.

  </details>
<!-- class-2 overview end -->

<!-- class-3 overview start -->
### Class-3 Overview

<details>

<summary> Click Here</summary>

#### 1. Operators and its types in php.


- Arithmetic (গাণিতিক অপারেটর) 

  ``` 
   + ,  - ,  * ,  / ,  % (Modulus),  ** (Exponentiation)
  ```

- Assignment (নির্ধারণ অপারেটর).
  
  ``` 
   =, +=, -=, *=, /=
  ```

- Comparison (তুলনা).
  
  ``` 
   ==, !=, ===, !==, < (less), > (greater), <=, >=
  ```

- Increment / decrement.
  
  ``` 
  ++a, a++, --a, a-- 
  ```

- Logical and others.

  ``` 
   !, &&, || 
  ```

 #### 1. Statements.

- If

- Else

- Else if

- Switch


 </details>
<!-- class-3 overview end -->

<!-- class-4 overview start -->
### Class-4 Overview

<details>

<summary>Click Here</summary>

  1. #### Loop
   
- Operator: Increment (++) and Decrement (--).    

- For Loop.
    ```
    for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
    } 
    ```

- While loop.
    ```
    $x = 1;
    while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
    } 
    ```

- Do while.
    ```
    $x = 1;
    do {
    echo "The number is: $x <br>";
    $x++;
    } while ($x <= 5);
    ```

- Foreach.
    ```
    $colors = array("red", "green", "blue", "yellow");
    foreach ($colors as $value) {
    echo "$value <br>";
    }
    ```


</details>
<!-- class-1 overview end -->

<!-- class-5 overview start -->
### Class-5 Overview

<details>

<summary> Click Here</summary>

  1. #### break
```
   <?php
   
    for ($x = 0; $x < 10; $x++) {
      if ($x == 4) {
        break;
      }
      echo "The number is: $x <br>";
    }
    ?>
```
`

  2. #### continue.

```
    <?php

    for ($x = 0; $x < 10; $x++) {
      if ($x == 4) {
        continue;
      }
      echo "The number is: $x <br>";
    }
    ?>
```
  3. #### Indexed array.

```
    <?php

    $cars = ["Volvo", "BMW", "Toyota"];
    foreach($cars as $index => $value){

      echo $index . $cars . "<br>";
    }
    ?>
```
  4. #### Associative array.

```
    <?php

    $age = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];

    foreach($age as $x => $x_value) {
      echo $x ." " . $x_value;
      echo "<br>";
    }
    ?>
```
  5. #### Multidimensional array.


```
      <?php 

      $student =
       [
          ["Johns",22,18],
          ["Rocky",15,13],
          ["Mickl",5,2],
          ["Crish",17,15]
        ];

        echo "Name: ".$student[0][0].". "."Age: ".$student[0][1].". ID No: ".$student[0][2].".<br>";
        echo "Name: ".$student[1][0].". "."Age: ".$student[1][1].". ID No: ".$student[1][2].".<br>";
        echo "Name: ".$student[2][0].". "."Age: ".$student[2][1].". ID No: ".$student[2][2].".<br>";
        echo "Name: ".$student[3][0].". "."Age: ".$student[3][1].". ID No: ".$student[3][2].".<br>";
    ?>

```

</details>
<!-- class 5 is end -->

<!-- class-6 overview start -->
### Class-6 Overview

<details>

<summary> Click Here</summary>

  1. #### Array Bulding Function

 - count(which_array), sizeof(which_array).
 ```
   <?php
    $cars=array("Volvo","BMW","Toyota");
    echo count($cars);
   
    $cars=array("Volvo","BMW","Toyota");
    echo sizeof($cars);

    ?>
 ```
 - max(which_array), min(which_array)
  ```
   <?php

    echo(max(2,4,6,8,10) . "<br>");
    echo(max(22,14,68,18,15) . "<br>");
    echo(min(array(4,6,8,10)) . "<br>");
    echo(min(array(44,16,81,12)));

     ?>
   ```
 - in_array(which_you_want_search, from_which_array, strict_mode)
   ```
   <?php

    $people = array("Peter", "Joe", "Glenn", "Cleveland");

    if (in_array("Glenn", $people))
      {
      echo "Match found";
      }
    else
      {
      echo "Match not found";
      }

    ?>
   ```
 - array_search(which_you_want_search, from_which_array)
   ```
   <?php

   $a=array("a"=>"red","b"=>"green","c"=>"blue");
   echo array_search("red",$a);

    ?>
   ```
 - array_pop(from_which_array) - for delete last element
   ```
   <?php

   $a=array("red","green","blue");
    array_pop($a);
    echo "<pre>";
    print_r($a);
    echo "</pre>";

    ?>
   ```
 - array_push(which_array, new_value) - add element on last
   ```
    <?php

   $a=array("red","green","blue");
    $a=array("red","green");
    array_push($a,"blue","yellow");
    echo "<pre>";
    print_r($a);
    echo "</pre>";

    ?>
   ```
 - array_merge(all_arrays) - make a new array by merging multiple array
 - array_slice(from_which_array, from_index, total_element) - make a new array by taking some element from an array.
 - array_splice(from_which_array, from_index, total_element) - remove array element from an this array
 - array_diff(first_array, second_array)
 - array_unique(which_array)
 - array_sum(which_array)


```
   <?php
   
    for ($x = 0; $x < 10; $x++) {
      if ($x == 4) {
        break;
      }
      echo "The number is: $x <br>";
    }
    ?>
```
</details>
<!-- class-6 overview end -->