
<?php
if(isset($_POST['btnsub'])){
    $c1 = $_POST['csc111'];
    $c2 = $_POST['bio111'];
    $c3 = $_POST['chm111'];
    $c4 = $_POST['cit111'];
    $c5 = $_POST['mat111'];
    $c6 = $_POST['mat112'];
    $c7 = $_POST['phy111'];
    $c8 = $_POST['phy119'];
    $c9 = $_POST['cst111'];
    $c10 = $_POST['gst111'];
    $c11 = $_POST['eds111'];
    $c12 = $_POST['tmc111'];
    $c13 = $_POST['tmc112'];
    $regno = $_GET['id'];
    $conn = @mysqli_connect("localhost", "root", "");
    $select = @mysqli_select_db($conn, "studentreg");
    $sql = "INSERT INTO coursereg SET RegNo = '$regno', c1 = '$c1', c2 = '$c2',c3 = '$c3',c4 = '$c4',c5 = '$c5',c6 = '$c6',c7 = '$c7',c8 = '$c8',c9 = '$c9',c10 = '$c10',c11 = '$c11',c12 = '$c12',c13 = '$c13'";
    $result = @mysqli_query($conn,$sql);
    if($result){
        
        echo("Selected courses have been registered");
    }
    else
        echo '<script>alert("Fill all fields")</script>';
}

?>

<!DOCTYPE html>
<html>
    <body style="background: url(image/bgg.jpg); -webkit-background-size: cover;background-size: cover;">
        <div>
                <form name="coursereg" method="post" style="width: 50%; float: left;">
                    <label>Departmental Courses</label>
                    <hr>
                    <input type="checkbox" name="csc111" value="CSC 111 - Introduction to Computer Science">CSC 111 - Introduction to Computer Science
                    <br><br>
                    <label>Other Compulsory Courses</label>
                    <hr>
                    <input type="checkbox" name="bio111" value="BIO 111 - General Biology I">BIO 111 - General Biology I<br>
                    <input type="checkbox" name="chm111" value="CHM 111 - General Physical Chemistry">CHM 111 - General Physical Chemistry<br>
                    <input type="checkbox" name="cit111" value="CIT 111 - Microsodt Office Specialist Certificate">CIT 111 - Microsodt Office Specialist Certificate<br>
                    <input type="checkbox" name="mat111" value="MAT 111 - Algebra">MAT 111 - Algebra<br>
                    <input type="checkbox" name="mat112" value="MAT 112 - Trigonometry and Analytical Geometry">MAT 112 - Trigonometry and Analytical Geometry<br>
                    <input type="checkbox" name="phy111" value="PHY 111 - Mechanics and Properties of Matter">PHY 111 - Mechanics and Properties of Matter<br>
                    <input type="checkbox" name="phy119" value="PHY 119 - Physics Practical 1">PHY 119 - Physics Practical 1<br>
                    <br>
                    <label>General Courses</label>
                    <hr>
                    <input type="checkbox" name="cst111" value="CST 111 - Use of Library, Study Skills and ICT">CST 111 - Use of Library, Study Skills and ICT<br>
                    <input type="checkbox" name="gst111" value="GST 111 - Communication in English I">GST 111 - Communication in English I<br>
                    <input type="checkbox" name="eds111"value="EDS 111 - Entrepreneurial Development Studies">EDS 111 - Entrepreneurial Development Studies<br>
                    <input type="checkbox" name="tmc111" value="TMC 111 - Total Man Concept I">TMC 111 - Total Man Concept I<br>
                    <input type="checkbox" name="tmc112" value="TMC 112 - Total Man Concept - Sports">TMC 112 - Total Man Concept - Sports<hr>
                    <input type="submit" name="btnsub">
            </table>
        </div>
    </body>
</html>