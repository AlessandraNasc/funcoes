<html>
    <head>
       <title> Conversão </title>
    </head>
 <body>
    <form action="" method="POST">
        <h2>Conversão Temperatura</h2>
        <div>
            <label> 1 - Celsius para Farenheit<br /></label>
            <label> 2 - Farenheit para Celsius<br /></label>
            Digite a opção : <input type="number" name="option" /><br /><br />
        </div>

        </div>
        <div>
            Temperatura : <input type="number" name="number" /><br /><br />
            <input type="submit" name="submit" value="Calcular" />
        </div>
    </form> 
    <?php
        $option = $_POST['option'];
        $temp = $_POST['number'];

        if($option==1)
        echo "Temperatura em Farenheit: ".conversaoEmCelsius($temp);
        elseif($option==2)
        echo "Temperatura em Celsius: ".conversaoEmFarenhreit($temp);
        else
        echo "Opção inválida";
        
        function conversaoEmCelsius(float $temperatura){
            $result = ($temperatura*9/5) + 32;
            return number_format($result,2, '.', '');
        }
        function conversaoEmFarenhreit(float $temperatura){
            $result = ($temperatura-32)*5/9;
            return number_format($result,2, '.', '');
        }
    ?>
 </body>
</html>