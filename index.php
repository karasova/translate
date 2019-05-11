<!DOCTYPE html>
<html>
<head>
    <title> Перевод </title>
</head>
<body>
    <form method = 'POST'>
        <p> Перевод </p>
        <p><input name = 'word' placeholder = 'Word'></p>
        <select name="language" >
            <option value="en">Английский</option>
            <option value="ru">Русский</option>
        </select>
        <p><button type="submit">Перевести</button></p>
    </form>

   <?php  
        include "translate.php";
        if (isset($_POST['word'])){
            $word = mb_strtolower($_POST['word']);
            $lang = $_POST['language'];
            echo translate($lang, $word);
        }
        else
            echo "<p>Введите слово!<p>";   
                  
          
    ?>
    
</body>
</html>