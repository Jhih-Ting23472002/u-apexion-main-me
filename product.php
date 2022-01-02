<?php require __DIR__ . "/__connect_db.php";
$perPage=2;
$t_sql ="SELECT COUNT(1) FROM product";
// 算總比數
$totalRows= $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];
$totaPages= ceil($totalRow/$perPage);

//提取表單資料
$sql = "SELECT* FROM product";
$products = $pdo->query($sql)->fetchAll();
?>
<?php require __DIR__ . "/__html_head.php"; ?>
<div class="d-flex">
<?php require __DIR__ . "/__navbar.php"; ?>
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-light pt-3 shadow ">
  <div class="container-fluid">
    <a class="navbar text-warning" href="product.php" style="text-decoration:none;">所有商品</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            女生
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">外套</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">T恤</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">帽子</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            男生
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">外套</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">T恤</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">帽子</a></li>
          </ul>
        </li>
      </ul>
      <button type="button" class="btn btn-info"><a class="text-dark" href="product_new.php" style="text-decoration:none;">新增商品</a></button>
      <form class="d-flex align-items-center ms-2">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<!-- 下方列表 -->
<div class="bd-example p-3">
  <table class="table table-hover text-light">
      <thead>
    <tr class="text-info">
      <th scope="col">編號</th>
      <th scope="col">分類</th>
      <th scope="col">商品名稱</th>
      <th scope="col">產品照片</th>
      <th scope="col">尺寸</th>
      <th scope="col">庫存數量</th>
      <th scope="col">價格</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($products as $p): ?>
    <tr>
      <td><?= $p['sid']?></td>
      <td><?= $p['category']?></td>
      <td><?= $p['product_name']?></td>
      <td><?= $p['img']?></td>
      <td><?= $p['size']?></td>
      <td><?= $p['quantity']?></td>
      <td><?= $p['price']?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
  </table>
  <div class="row">
    <div class="col text-warning d-flex justify-content-end align-items-center">
      <p class="px-2">共有<?= $totalRows?>筆資料</p>
      <nav aria-label="Page navigation example">
  <ul class="pagination pagination-sm">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
    </div>

  </div>
</div>
</div>
</div>
<?php require __DIR__ . "/__scripts.php"; ?>
<?php require __DIR__ . "/__html_foot.php"; ?>

