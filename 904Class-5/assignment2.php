<?php


// Question 02: 

// 	Let’s think about a use case, Daraz admin’s have some products for uploads on their e-commerce site. So make an array of products which contains 5 products.

// Go to daraz website and pick any 5 products and make your array.

// Must mention Which type of array you have made.


$mobiles = [

            ['realme 91','8GB','18GB','18,774'],
            ['realme 92','4GB','64GB','10,919'],
            ['realme 93','4GB','64GB','12,000'],
            ['realme 94','6GB','64GB','14,739'],
            ['realme 95','2GB','32GB','9,279']
      
]; //Multidimensional array  b


echo" Brand Name: "." ".  $mobiles[0][0]. " RAM: ".$mobiles[0][1]. " ROM: ". $mobiles[0][2]. " Price: ". $mobiles[0][3]. "<br>";
echo" Brand Name: "." ".  $mobiles[1][0]. " RAM: ".$mobiles[1][1]. " ROM: ". $mobiles[1][2]. " Price: ". $mobiles[1][3]. "<br>";
echo" Brand Name: "." ".  $mobiles[2][0]. " RAM: ".$mobiles[2][1]. " ROM: ". $mobiles[2][2]. " Price: ". $mobiles[2][3]. "<br>";
echo" Brand Name: "." ".  $mobiles[3][0]. " RAM: ".$mobiles[3][1]. " ROM: ". $mobiles[3][2]. " Price: ". $mobiles[3][3]. "<br>";
echo" Brand Name: "." ".  $mobiles[4][0]. " RAM: ".$mobiles[4][1]. " ROM: ". $mobiles[4][2]. " Price: ". $mobiles[4][3]. "<br>";





$mobilesTwo = [

    [' Mobile NAME: ' =>'realme 91',' RAM; '=>'8GB',' ROM: '=>'18GB',' Price: '=>'18,774'],
    [' Mobile Name: ' =>'realme 92',' RAM; '=>'4GB',' ROM: '=>'64GB',' Price: '=>'10,919'],
    [' Mobile Name: ' =>'realme 93',' RAM; '=>'4GB',' ROM: '=>'64GB',' Price: '=>'12,000'],
    [' Mobile Name: ' =>'realme 94',' RAM; '=>'6GB',' ROM: '=>'64GB',' Price: '=>'14,739'],
    [' Mobile Name: ' =>'realme 95',' RAM; '=>'2GB',' ROM: '=>'32GB',' Price: '=>'9,279']

]; //Associative Array



foreach ($mobilesTwo as  $value) {
    # code...

    foreach ($value as $index => $secondV) {
        
        echo $index. $secondV . "<br>";
    }


}

?>
