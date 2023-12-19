<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    <link href="viewproduct.css" rel=stylesheet>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  </head>
<body>

<style>
/* navbar */
.form-group
{
  padding-left: 1rem;
}
.form-control-feedback
{
  position: absolute;
  display: block;
  z-index: 2;
  width: 3rem;
  height: 2.375rem;
  line-height: 2.375rem;
  pointer-events: none;
  text-align: center;
  pointer-events: none;
}
.form-control
{
  width: 1000px;
}
</style>

<nav class="navbar bg-light border-bottom py-0">
  <div class="container-fluid">
    <div class="d-flex align-items-center">
    <a class="navbar-brand px-2 mx-2" style="font-size: 1.5rem;">LOGO</a>
      <div class="form-group">
        <i class="bi bi-search mx-auto form-control-feedback" style="font-size:20px"></i> 
        <input type="text" class="form-control">
      </div>
    </div>
    <span class="d-flex align-items-center">
    <button type="button" class="btn btn-secondary mx-3" style="--bs-btn-padding-y: .45rem; --bs-btn-padding-x: 1.25rem; --bs-btn-font-size: 1rem;">Sign in</button>
    <a class="bi bi-bell link-dark p-3" style="font-size:30px"></a>
    <a class="bi bi-cart3 link-dark p-3" style="font-size:30px"></a>    
    </span>
  </div>
</nav>

<div class="container">
  <div class="image-header">
    <img src="../assets/vertical-placeholder-image.jpg">
  </div>
  <div class="desc-body">
    <h1>T-Shirt</h1>
    <h1><b>Rp.100.000,-</b></h1>
    <span class="d-flex align-items-center">
    <i class="bi bi-star-fill p-1" style="font-size:35px"></i>    
    <i class="bi bi-star-fill p-1" style="font-size:35px"></i>    
    <i class="bi bi-star-fill p-1" style="font-size:35px"></i>    
    <i class="bi bi-star-fill p-1" style="font-size:35px"></i>    
    <i class="bi bi-star-fill p-1" style="font-size:35px"></i>    
    <h3 class="mx-2"><b>(5.0)</b></h3>
    </span>
    <p>*Shipping calculated at checkout</p>
    <hr class="section">
    <h6>Variations</h6>
    <button type="button" class="btn btn-outline-dark">S</button>
    <button type="button" class="btn btn-outline-dark">M</button>
    <button type="button" class="btn btn-outline-dark">L</button>
    <button type="button" class="btn btn-outline-dark">XL</button>
    <div class="d-grid gap-2 col-15">
      <button type="button" class="btn btn-secondary btn-lg btn-block">ADD TO CART</button>
      <button type="button" class="btn btn-secondary btn-lg btn-block">BUY NOW</button>
    </div>
    <br>
    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut <br> et massa mi. Aliquam in hendrerit urna. Pellentesque sit <br> amet sapien.</p>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\final-project\resources\views/viewproduct.blade.php ENDPATH**/ ?>