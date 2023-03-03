<html>
<head>
    <title>PHP Prime Number Program</title>
</head>
<body>
    <h2>PHP Prime Number Program</h2>
    <form method="post">
        Enter the value of N: <input type="text" name="num"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        if(isset($_POST['submit'])){
            $n = $_POST['num'];
            $count = 0;
            $i = 2;
            while ($count < $n){
                $prime = true;
                for ($j = 2; $j <= sqrt($i); $j++){
                    if ($i % $j == 0){
                        $prime = false;
                        break;
                    }
                }
                if ($prime){
                    echo $i." ";
                    $count++;
                }
                $i++;
            }
        }
    ?>
</body>
</html>
