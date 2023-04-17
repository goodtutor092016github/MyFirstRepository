<!DOCTYPE html>
<html>
    <head>
        <title>My QLink</title>
    </head>
</html>

<body>
    <h1>Welcome to My QLink</h1>
    <p>Use the link below to access your questions:</p>
    <?php
        $student = $_GET['student'];
        $link = '';
        if(($handle = fopen("https://goodtutor092016github.github.io/MyFirstRepository/data.xlsx", "r"))!==FALSE) {
            $header = fgetcsv($handle);
            while(($data = fgetcsv($handle)) !== FALSE) {
                if($data[0] == $student) {
                    $link = $data[1];
                    break;
                }
            }
            fclose($handle);
        }
        if($link) {
            echo "<a href=\"$link\">$link</a>";
        } else {
            echo "Sorry, your name was not found in the list of students.";
        }
    ?>
    
</body>
</html>