<?php
// Abtract Class

     // Parent Class (INDUK)
     abstract class Location
     {
          public string $name;
     }

     // Child class (ANAKAN)
     class City     extends Location
     {
     }
     
     class Province extends Location
     {
     }

     class Country  extends Location
     {
     }

?>