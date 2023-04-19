<!doctype html>
<html>
<head>
    <meta charest="utf-8">
    <title>School Database Sample</title>
    <link href="css/style.css" rel="stylesheet"/>
</head>

<body>
<div id="wrapper">
    <div id="row1">
        <div id="row1_col1">
            <form action="" method="post">
                <fieldset>
                    <legend>Class</legend>
                    <label>class name:</label>
                    <input type="text" name="txt_class"/>
                    <input type="submit" name="submit1" value="inser-class"/>
                </fieldset>
            </form>
            <table border="1">
                <tr>
                    <td>classid</td>
                    <td>class name</td>
                    <td>delete</td>
                    <td>edit</td>
                </tr>

                <?php
                include "connection.php";
                $query = "SELECT * FROM class";
                $result = $db->prepare($query);
                $result->execute();
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

                    echo "
    <tr>
    <td>" . $row['class_id'] . "</td>
    <td>" . $row['class_name'] . "</td>
    <td><a href='delete.php?id=" . $row['class_id'] . "&&page=1'>delete</a> </td>
    <td><a href='edit.php?id=" . $row['class_id'] . "&&page=1'>edit</a> </td>
    </tr>
    ";
                }
                ?>

            </table>
        </div>

        <div id="row1_col2">
            <form action="" method="post">
                <fieldset>
                    <legend>Student</legend>
                    <label>name</label><br/>
                    <input type="text" name="stud_name"/><br/>
                    <label>family</label><br/>
                    <input type="text" name="stud_family"/><br/>
                    <label>average</label><br/>
                    <input type="text" name="stud_ave"/><br/>
                    <input type="submit" name="submit1" value="inser-student"/>
                </fieldset>

            </form>
            <table border="1">
                <tr>

                    <td>name</td>
                    <td>family</td>
                    <td>average</td>
                    <td>delete</td>
                    <td>edit</td>
                </tr>


                <?php
                include "connection.php";
                $query = "SELECT * FROM student";
                $result = $db->prepare($query);
                $result->execute();
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {

                    echo "
    <tr>
    <td>" . $row['name'] . "</td>
    <td>" . $row['family'] . "</td>
    <td>" . $row['ave'] . "</td>
    <td><a href='delete.php?id=" . $row['stud_id'] . "&&page=1'>delete</a> </td>
    <td><a href='edit.php?id=" . $row['class_id'] . "&&page=1'>edit</a> </td>
    </tr>
    ";
                }
                ?>

            </table>
        </div>
    </div>
</div>
</body>
</html>
