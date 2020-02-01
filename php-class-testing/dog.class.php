<?php
class Dog {
    public $breed = 'Beagle';
    public $weight = 40;

    public function bark( $times = 1 )
    {
        if ( $times > 0)
        {
            while ( $times > 0 )
            {
                ?>
                     <p>
                         <strong>BARK!</strong>
                     </p>
                 <?php
                 $times--; //$times = $times - 1;
            }
        }
    }
}
