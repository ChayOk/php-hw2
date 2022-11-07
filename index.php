<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="task">
        <h2>1. Если переменная $a пустая, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 3, -3, 0, null, true, '', '0'.</h2> 

        <form method="GET" class="firstForm">
            <button name="pressButton" value="1">$a = 1</button>
            <button name="pressButton" value="3">$a = 3</button>
            <button name="pressButton" value="-3">$a = -3</button>
            <button name="pressButton" value="$nullNum">$a = 0</button>
            <button name="pressButton" value="NULL">$a = null</button>
            <button name="pressButton" value="true">$a = true</button>
            <button name="pressButton" value="''">$a = ''</button>
            <button name="pressButton" value="'0'">$a = '0'</button>
        </form>
        <?php           
            $nullNum = 0;
            
            $pressButton = $_GET['pressButton'];
            if ($_GET['pressButton'] === 'true') {
                $pressButton = true;
            } else if ($_GET['pressButton'] === 'NULL') {
                $pressButton = NULL;
            } else if ($_GET['pressButton'] === 0) {
                $pressButton = 0;
            }

            if($_GET['pressButton']) { 
                if ($pressButton != 0) {
                    echo "<p class=\"firstTask\">Переменная \$a != 0, \$a = {$pressButton}</p>";
                } else{
                    echo "<p class=\"firstTask\">Переменная \$a = 0</p>";
                }
            }

            //простой вариант решения
            $a = 1;
            if ($a != 0) {
                echo "<p class=>Переменная \$a != 0, \$a = {$a}</p>";
            } else{
                echo "<p class=>Переменная \$a = 0</p>";
            }

            $a = 3;
            if ($a != 0) {
                echo "<p class=>Переменная \$a != 0, \$a = {$a}</p>";
            } else{
                echo "<p class=>Переменная \$a = 0</p>";
            }

            $a = -3;
            if ($a != 0) {
                echo "<p class=>Переменная \$a != 0, \$a = {$a}</p>";
            } else{
                echo "<p class=>Переменная \$a = 0</p>";
            }

            $a = 0;
            if ($a != 0) {
                echo "<p class=>Переменная \$a != 0, \$a = {$a}</p>";
            } else{
                echo "<p class=>Переменная \$a = 0</p>";
            }

            $a = NULL;
            if ($a != 0) {
                echo "<p class=>Переменная \$a != 0, \$a = {$a}</p>";
            } else{
                echo "<p class=>Переменная \$a = 0</p>";
            }

            $a = true;
            if ($a != 0) {
                echo "<p class=>Переменная \$a != 0, \$a = {$a}</p>";
            } else{
                echo "<p class=>Переменная \$a = 0</p>";
            }

            $a = '';
            if ($a != 0) {
                echo "<p class=>Переменная \$a != 0, \$a = {$a}</p>";
            } else{
                echo "<p class=>Переменная \$a = 0</p>";
            }

            $a = '0';
            if ($a != 0) {
                echo "<p class=>Переменная \$a != 0, \$a = {$a}</p>";
            } else{
                echo "<p class=>Переменная \$a = 0</p>";
            }
            ?>
    </div>
    <div class="task">
        <h2>2. Дано трехзначное число. Поменяйте среднюю цифру на ноль.</h2>

        <?php
            $num = 123;
            echo "<p>Трехзначное число: {$num}</p>";
            $num .= '';
            $num[1] = 0;

            echo "<p>Результат замены среднего числа: {$num}</p>";
        ?>
    </div>
    <div class="task">
        <h2>
            3.  Если переменная $a равна или меньше 1, а переменная $b больше или равна 3, то выведите сумму этих переменных, иначе выведите их разность (результат вычитания). Проверьте работу скрипта при $a и $b, равном 1 и 3, 0 и 6, 3 и 5.
        </h2>
        <?php
            $a = 1;
            $b = 3;
            echo "<p>\$a = {$a}, \$b = {$b}</p>";
            if ($a <= 1 && $b >= 3) {
                $result = $a + $b;
                echo "<p>Переменные \$a и \$b подходят к условию</p>";
                echo "<p>Результат (сумма): $result</p>";
            } else{
                $result = $a - $b;
                echo "<p>Переменные \$a и \$b не подходят к условию</p>";
                echo "<p>Результат (разность): $result</p>";
            }

            echo "<br>";

            $a = 0;
            $b = 6;
            echo "<p>\$a = {$a}, \$b = {$b}</p>";
            if ($a <= 1 && $b >= 3) {
                $result = $a + $b;
                echo "<p>Переменные \$a и \$b подходят к условию</p>";
                echo "<p>Результат (сумма): $result</p>";
            } else{
                $result = $a - $b;
                echo "<p>Переменные \$a и \$b не подходят к условию</p>";
                echo "<p>Результат (разность): $result</p>";
            }

            echo "<br>";

            $a = 3;
            $b = 5;
            echo "<p>\$a = {$a}, \$b = {$b}</p>";
            if ($a <= 1 && $b >= 3) {
                $result = $a + $b;
                echo "<p>Переменные \$a и \$b подходят к условию</p>";
                echo "<p>Результат (сумма): $result</p>";
            } else{
                $result = $a - $b;
                echo "<p>Переменные \$a и \$b не подходят к условию</p>";
                echo "<p>Результат (разность): $result</p>";
            }
        ?>
    </div>
    <div class="task">
        <h2>
            4. Дана строка с символами, например, 'abcde'. Проверьте, что первым символом этой строки является буква 'a'. Если это так - выведите 'да', в противном случае выведите 'нет'.
        </h2>
        
        <?php
            $str1 = 'abcde';
            if ($str1[0] === 'a') {
                echo "<p>В строке {$str1} первым символом является буква 'a'</p>";
            } else{
                echo "<p>В строке {$str1} первым символом является буква {$str1[0]}</p>";
            }
        ?>
    </div>
    <div class="task">
        <h2>
            5. Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр. Если это так - выведите 'да', в противном случае выведите 'нет'.
        </h2>
        
        <?php
            $str1 = '123456';   
            $sum1 = $str1[0] + $str1[1] + $str1[2];         
            $sum2 = $str1[3] + $str1[4] + $str1[5];  

            echo "<p>Заданное шестизначное число: {$str1}</p>";
            echo "<p>Сумма первых трех чисел = {$sum1}</p>";
            echo "<p>Сумма вторых трех чисел = {$sum2}</p>"; 

            if ($sum1 == $sum2) {                
                echo "<p>Сумма первых трех чисел равна сумме вторых трех чисел</p>";
            } else{
                echo "<p>Сумма первых трех чисел неравна сумме вторых трех чисел</p>";
            }

            echo "<br>";

            $str2 = '123321';
            $sum1 = $str2[0] + $str2[1] + $str2[2];         
            $sum2 = $str2[3] + $str2[4] + $str2[5];  

            echo "<p>Заданное шестизначное число: {$str2}</p>";
            echo "<p>Сумма первых трех чисел = {$sum1}</p>";
            echo "<p>Сумма вторых трех чисел = {$sum2}</p>"; 

            if ($sum1 == $sum2) {                
                echo "<p>Сумма первых трех чисел равна сумме вторых трех чисел</p>";
            } else{
                echo "<p>Сумма первых трех чисел неравна сумме вторых трех чисел</p>";
            }
        ?>
    </div>
    <div class="task">
        <h2>
            6. Разработайте программу, которая определяла количество прошедших часов по введенным пользователем градусах. Введенное число может быть от 0 до 360.
        </h2>
        
        <form method="GET" class="secForm">
            <label>
                Введите градус:
                <input type="number" name="degree" min="0">
            </label>
            <button type="submit" name="butTime">Определить время</button>
        </form>
        
        <?php
        if (isset($_GET['butTime']) && $_GET['degree'] !== '') { //проверяем введенное поле на пустоту
            $degree = $_GET['degree'];
            $hour = floor(12 / 360 * $degree); //floor округляет в меньшую сторону
            
            if ($hour == 1) {
                echo "<p>Прошел {$hour} час!</p>";
            } else if($hour > 1 && $hour < 5){
                echo "<p>Прошло {$hour} часа!</p>";
            } else {
                echo "<p>Прошло {$hour} часов!</p>";
            }            
        } else{
            echo "<p>Вы ничего не ввели!</p>";
        }
        ?>
    </div>
    <div class="task">
        <h2>
            7. Разработайте программу, которая из чисел 20 .. 45 находила те, которые делятся на 5 и найдите сумму этих чисел
        </h2>
        
        <?php  
            echo "<p>Числа, которые делятся на 5:</p>";
            for ($i = 20; $i < 46; $i++) { 
                if (!($i % 5)) {
                    $sum += $i;
                    echo "<p>{$i}</p>";
                }
            }
            echo "<br>";
            echo "<p>Сумма числе, которые делятся на 5: {$sum}</p>";
        ?>
    </div>
    <div class="task">
        <h2>
            8. Дано пятизначное число. Цифры на четных позициях «занулить». Например, из 12345 получается число 10305.
        </h2>
        
        <?php
            $num1 = 12345;
            echo "<p>Заданное число: {$num1}</p>";
            $num1 .= '';            
            for ($i = 0; $i < strlen($num1); $i++) { 
                if ($i % 2 != 0) {
                    $num1[$i] = 0;
                }
            }
            echo "<p>Результат: {$num1}</p>"
        ?>
    </div>
    <div class="task">
        <h2>
            9. Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for.
        </h2>
        
        <?php
            $num = 1000;
            $i = 0;
            while ($num >= 50) {
                $num /= 2;
                $i++;
            }
            echo "<p><b>Цикл while</b></p>";
            echo "<p>Результат деления: {$num}</p>";
            echo "<p>Количество итераций: {$i}</p>";

            echo "<br>";

            $num = 1000;
            for ($i = 0; $num > 50 ; $i++) { 
                $num /= 2;                
            }
            echo "<p><b>Цикл for</b></p>";
            echo "<p>Результат деления: {$num}</p>";
            echo "<p>Количество итераций: {$i}</p>";
        ?>
    </div>
    <div class="task">
        <h2>
        10.  Вывести на экран фигуру из звездочек (квадрат из n строк, в каждой строке n звездочек).
        </h2>        
        <div class="star">
            <?php
                $n = 10;
                for ($i = 0; $i < $n; $i++) { 
                    for ($j = 0; $j < $n; $j++) { 
                        echo "* ";
                    }
                    echo "<br>";
                }
            ?>
        </div>
    </div>    
</body>
</html>