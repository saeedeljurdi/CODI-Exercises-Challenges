<?php 
    $course_name = "PHP BASICS";
    settype($course_name, "string");
    $enrolled_students = 20;
    settype($enrolled_students, "integer");
    $price = 12.33;
    settype($price, "float");
    $on_discount = false;
    settype($on_discount, "boolean");
    
    $yes_no;
    
    if($on_discount === true) { $yes_no = "yes"; }
    else{ $yes_no = "no"; }
    
    echo "Course title: ${course_name}\nEnrolled Students: ${enrolled_students}\nCourse price: ${price} $USD\nCourse on discount: ${yes_no}\n"
?>
