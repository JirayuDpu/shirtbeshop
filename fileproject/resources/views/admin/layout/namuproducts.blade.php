<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>




   <div class="col-sm-3">
  <h2>Category</h2>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">Products</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body"><a href="{{ route('products.create') }}">Add Products </a></div>
        <div class="panel-body"><a href="{{ route('products.index') }}">Products </a></div>
      </div>
    </div>
  </div>


  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse2">Category</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body"><a href="{{ route('category.index') }}">category</a></div>
        <div class="panel-body"><a href="{{ route('colors.index') }}">colors </a></div>
        <div class="panel-body"><a href="{{ route('sizes.index') }}">sizes </a></div>
      </div>
    </div>
  </div>




</div>