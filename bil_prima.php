<h3>Menampilakan bilangan prima dari 1 - 10</h3>
<!-- 2, 3, 5, 7, 11, 13, 17, 19, 23, 29, 31, 37, 41, 43, 47, 53, 59, 61, 67, 71, 73, 79, 83, 89, 97 -->
<?php 

        for ( $i=1; $i < 100 ; $i++ ) { 
            $x=0;
            for ( $j=1; $j <= 100 ; $j++ ) { 
                if ( $i % $j == 0 ) {
                    $x++;
                }
            }
            // echo $x . "<br>";

            if ( $x == 2 ) {
                echo $i . "<br>" ;
            }

        }

?>