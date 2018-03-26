<html>
    <html lang="en">
         <head>
        <meta charset="UTF-8">
  <title>Calculator</title>
  <h1> Calculator</h1>
    </head>
    <body>

  <form method="post">
    <input type="text" name="numb1">
          <input type="text" name="numb2">
      <select name="operator" id="">
        <option>None</option>
               <option>Add</option>
       <option>Subtract</option>
           <option>Multiply</option>
       <option>Divide</option>
            </select>
        <button type="submit" name="submit" value="submit">Calculate</button>
         </form>

  <?php
    if (isset($_POST['submit'])) {
            $result1 = $_POST['numb1'];
        $result2 = $_POST['numb2'];
            $operator = $_POST['operator'];
              switch ($operator) {
                    case 'None':
                        echo "You need to select any operator";
                        break;
                    case 'Add':
                        echo $result1 + $result2;
                        break;
                    case 'Subtract':
                        echo $result1 - $result2;
                        break;
                    case 'Multiply':
                        echo $result1 * $result2;
                        break;
                    case 'Divide':
                        echo $result1 / $result2;
                        break;
                    case 'Square':
                        echo $result1 ** $result2;
                        break;
                }
            }
