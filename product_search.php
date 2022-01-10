<?php require __DIR__ . "/__connect_db.php";
if($_GET['Search'] != "") {
    @$n = $_GET['Search'];
    /*從score資料表，撈取所有欄位(用*米字號)，當所傳來的值是字首、中、尾有符合(LIKE)資料name欄位的名字，
      就會呼叫出來，並且透過id欄位來設定為升序(ASC是升序(小跑到大)、DESC是降序(大跑到小))*/
    $sql = "SELECT * FROM product WHERE product LIKE '%$n%' ORDER BY id ASC";
    $score_result = mysqli_query($kt_conn,$sql);
  }
  echo "<table border='1'>
      <tr>
        <th>編號</th>
        <th>姓名</th>
        <th>國文</th>
        <th>英文</th>
        <th>數學</th>
        <th>電子信箱</th>
      </tr>";

while($row = mysqli_fetch_array($score_result))
{
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['chinese'] . "</td>";
    echo "<td>" . $row['english'] . "</td>";
    echo "<td>" . $row['math'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
}
echo "</table>";

//關閉資料庫
mysqli_close($kt_conn);
?>