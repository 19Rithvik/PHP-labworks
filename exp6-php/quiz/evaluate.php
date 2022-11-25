<?php 
    echo "<title>Result</title>";
    $x = 0;
    if(isset($_POST['submit'])){
        $answer1 = $_POST['question1'];
        $answer2 = $_POST['question2'];
        $answer3 = $_POST['question3'];
        $answer4 = $_POST['question4'];
        $answer5 = $_POST['question5'];
        $answer6 = $_POST['question6'];

        $sol1 = 'portugal';
        $sol2 = 'kabaddi';
        $sol3 = 'hockey';
        $sol4 = 'no';
        $sol5 = 'yes';
        if($answer1 == $sol1)
            $x++;
        if($answer2 == $sol2)
            $x++;
        if($answer3 == $sol3)
            $x++;
        if($answer4 == $sol4)
            $x++;
        if($answer5 == $sol5)
            $x++;
        for($i=0;$i<count($answer6);$i++){
            if($answer6[$i] == "bharath" or $answer6[$i] == "hindusthan")
                $x = $x+0.5;
        }
        
        echo "<title>Result</title>";
        echo "<span><h3>Mark Gained : </h3>".$x."/6"."</span>";
        echo "<h1>Solution:</h1>";
        echo $sol1."<br>";
        echo $sol2."<br>";
        echo $sol3."<br>";
        echo $sol4."<br>";
        echo $sol5."<br>";
        echo "bharath or hindusthan";
    }
    else{
        echo "Take test by clicking below link"."<br><br>";
        echo "<a href='http://localhost/exp6-php/quiz/index.html'>Kindly take Test</a>";
    }
?>