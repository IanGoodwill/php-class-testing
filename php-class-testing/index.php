<?php
// Include our Dog class.
include 'dog.class.php';

//,Instantiating the Dog class
$beagel = new Dog(); // $beagel is an object; an instance of class: Dog.
?>
    <dl>
        <dt>Dog Breed</dt>
        <dd><?php echo $beagel->breed; // Outputting a string property. ?><dd>
        <dt>Weight</dt>
        <dd><?php echo $beagel->weight; // Outputting a interger property. ?></dd>
        <dt>Barks</dt>
        <dd><?php $beagel->bark(); // Executing a method. ?></dd>
    </dl>
<?php