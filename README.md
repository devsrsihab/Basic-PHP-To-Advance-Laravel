# Basic PHP To Advance Laravel

![Laravel_Framework-copy](https://user-images.githubusercontent.com/91025640/162565321-22c6509d-0931-41fa-a3f7-6504002479f0.jpg)


<!-- class-1 overview start -->
### Class-1 Overview.

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
### Class-2 Overview.

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
### Class-3 Overview.

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
### Class-4 Overview.

<details>

<summary> Click Here</summary>

  1. #### Loop.
   
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

<!-- class-4 overview start -->
### Class-5 Overview.

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
    $cars = array("Volvo", "BMW", "Toyota");
    foreach($cars as $index => $value){

      echo $index . $cars . "<br>";
    }
    ?>
```
  4. #### Associative array.
  5. #### Multidimensional array.









</details>