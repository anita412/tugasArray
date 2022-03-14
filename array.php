<!DOCTYPE html>
<html>
<head>
    <title>Tugas Array</title>
</head>
<body>
    <?php
    $perkenalan = array(
        array("ID SELS : ", "Nama : ", "Asal Universitas : ", "Prodi : "),
        array("220053", "Anita Ayu Safitri", "Universitas Muhammadiyah Surakarta", "Informatika")
    );
    echo $perkenalan[0][0];
    echo $perkenalan[1][0]."<br/>";
    echo $perkenalan[0][1];
    echo $perkenalan[1][1]."<br/>";
    echo $perkenalan[0][2];
    echo $perkenalan[1][2]."<br/>";
    echo $perkenalan[0][3];
    echo $perkenalan[1][3];
    ?>
</body>
</html>