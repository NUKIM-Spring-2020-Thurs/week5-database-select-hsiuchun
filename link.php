<?php
    ob_start();
    session_start();
    $link=mysqli_connect(
        'localhost',
        'root',
        'password',
        'php2020'
    );

    $SQL="SELECT * FROM employee";

    if($result=mysqli_query($link,$SQL)){

        echo "<table cellpadding=10 style='text-align:center;'>";
        echo "<tr style='font-family: PingFangSC-Regular, Verdana, Arial, 微软雅黑, 宋体;'>";
        while($fieldname = mysqli_fetch_field($result)){ 
            echo "<th bgcolor='#78c0a8'>".$fieldname->name."</th>"; 
        }
        "</tr>";
        while( $row = mysqli_fetch_assoc($result) ){ 
            //fetch_assoc 結合陣列需知道名稱
            //fetch_row 結合陣列使用索引值(0~)不用知道名稱
            echo "<tr bgcolor='#f4f5f9' style='font-family: PingFangSC-Regular, Verdana, Arial, 微软雅黑, 宋体;'>";
            echo "<td>".$row["No"]."</td>";
            echo "<td>".$row["Fname"]."</td>";
            echo "<td>".$row["Minit"]."</td>";
            echo "<td>".$row["Lname"]."</td>";
            echo "<td>".$row["Bdate"]."</td>";
            echo "<td>".$row["Address"]."</td>";
            echo "<td>".$row["Sex"]."</td>";
            echo "<td>".$row["Salary"]."</td>";
            echo "</tr>";
        }
        echo "</table>";

         
    }
?>
