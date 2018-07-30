<?

$name = "Malcolm";
$age = 32;

$personindex = [$name, $age];
$person = ["name"=>$name, "age"=>$age];

echo "My name is ".$name." and age is ".$age."<br><br>";

echo 'Name: "', $name,'"<br>';
echo 'Age: "', $age,'"<br><br>';

echo "Name: '",$name,"'<br>";
echo "Age: '",$age,"'<br><br>";

echo $personindex[0],"<br>";
echo $personindex[1],"<br><br>";

echo $person["name"],"<br>";
echo $person["age"],"<br><br>";

$age = null;

echo $age; // Question #5: The browser outputs nothing.

unset($name);
echo $name,"<br>";
// Question #6 => Notice: Undefined variable: name in /var/www/html/myframework/week_1/activity1-1.php on line 28


function calcGrade($grade){
    $letterGrade = "";

    if ($grade >= 90){
        $letterGrade = "A";
    }
    else if ($grade < 90 && $grade >= 80){
        $letterGrade = "B";
    }
    else if ($grade < 80 && $grade >= 70){
        $letterGrade = "C";
    }
    else if ($grade < 70 && $grade >= 60){
        $letterGrade = "D";
    }
    else {
        $letterGrade = "F";
    }

    return $letterGrade;
}

echo calcGrade(94),"<br>";
echo calcGrade(54),"<br>";
echo calcGrade(89.9),"<br>";
echo calcGrade(60.01),"<br>";
echo calcGrade(102.1),"<br><br>";

$colors = [0 => "Red", 1 => "Pink", 2 => "Blue", 3 => "Baby Blue", 4 => "Green", 5 => "Lime"];

foreach($colors as $key=>$value){
    echo "Color ",$key, " is ", $value,"<br>";
}

?>