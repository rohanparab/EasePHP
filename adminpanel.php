<?php include_once("functions.php"); ?>

<html>
    <head>
        <title>Admin Panel</title>
    </head>
    <body>
        <h1>Generate Department</h1>
        <form action="<?php secureSelf(); ?>" method="post">
            <p>Enter Department Name : </p>
            <?php input("text","dept","1"); ?>
            <br><br>
            <?php deptSemGen(); ?>
            <br>
            <button type="submit" name="adddept">Submit</button>
        </form>
        <hr>
        <h1>Genarate Student</h1>
        <form action="<?php secureSelf(); ?>" method="post">
            <p>Enter Name : </p>
            <?php input("text","name","1"); ?>
            <p>Select Department : </p>
            <select name="dept">
                <?php getAllDept(); ?>
            </select>
            <p>Enter Year : </p>
            <?php input("number","year","1"); ?>
            <button type="submit" name="addstudent">Submit</button>
        </form>
        <hr>
        <h1>Generate Teacher</h1>
        <form action="<?php secureSelf(); ?>" method="post">
            <p>Enter Name : </p>
            <?php input("text","name","1"); ?>
            <p>Select Department : </p>
            <select name="dept">
                <?php getAllDept(); ?>
            </select>
            <button type="submit" name="addteacher">Submit</button>
        </form>
        <a href="adminview.php?data=student"><button>View All Student</button></a>
        <a href="adminview.php?data=teacher"><button>View All Teacher</button></a>
    </body>
</html>

<?php
    if(isPost()){
        if(isset($_POST['adddept'])){
            $dept = secureVar($_POST['dept']);
            addDept($dept);
        }

        if(isset($_POST['addstudent'])){
            $name = secureVar($_POST['name']);
            $dept = secureVar($_POST['dept']);
            $year = secureVar($_POST['year']);

            if(addStudent($name, $dept, $year)){
                alert("Student Added");
            }else{
                alert("Error / Replication");
            }
        }

        if(isset($_POST['addteacher'])){
            $name = secureVar($_POST['name']);
            $dept = secureVar($_POST['dept']);

            if(addTeacher($name, $dept)){
                alert("Teacher Added");
            }else{
                alert("Error / Replication");
            }
        }
    }
?>