<!DOCTYPE html>
<html lang="en">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel frontend with data</title>
	<style>
	body {
    margin: 0;
    font-family: Roboto, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: .8125rem;
    font-weight: 400;
    line-height: 1.5385;
    color: #333;
    text-align: left;
    background-color: gray
}

.mt-50 {
    margin-top: 50px
}

.mb-50 {
    margin-bottom: 50px
}

.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: .1875rem
}

.card-img-actions {
    position: relative
}

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
    text-align: center
}

.card-img {
    width: 332px
}

.star {
    color: red
}

.bg-cart {
    background-color: orange;
    color: #fff
}

.bg-cart:hover {
    color: #fff
}

.bg-buy {
    background-color: green;
    color: #fff;
    padding-right: 29px
}

.bg-buy:hover {
    color: #fff
}

a {
    text-decoration: none !important
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 10px 10px;
}

li {
	float:right;
  display: inline;
  padding:12px 12px;
}
ul li a {
  display: inline;
  padding:12px 12px;
  font-size:17px
}
ul li a:hover {
	background-color:gray;
	border-radius:4px;
	color:white
}
/* search */
.search-box{
  width: 100%;
  position: relative;
  display: flex;

}
.search-input{
  width: 100%;
  padding: 10px;
  border: 2px solid #111d5e;
  border-radius:10px 0 0 10px ;
  border-right: none;
  outline: none;
  font-size: 20px;
  color: tomato;
  background: none;
}
.search-button{
 text-align: center;
height: 61px;
width: 40px;
outline: none;
cursor: pointer;
border: 2px solid #111d5e;
border-radius: 0 10px 10px 0 ;
border-left: none;
background: none;
font-size: 20px;
border-left: 2px solid #111d5e;


}

</style>

</head>
<body>
	<div class="container d-flex justify-content-center mt-50 mb-50">
		<div class="row">
			<div class="card">
            <div class="row">
                <div class="col-md-5 mt-2">
                    <form action="/search" method="get">
                        @csrf
                        <div class="search-box">
                            <input type="text" name="key" class="search-input" placeholder="Search..">
                            <button class="search-button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-7 mt-2">
                    <ul>
                    <li><a href="#news">Registration</a></li>
                    <li><a href="#home">Login</a></li>
                    <li><a href="{{url('/')}}">Home</a></li>
                    </ul>
                </div>
			</div>
			</div>
		</div>
	</div>
    <div class="container d-flex justify-content-center mt-50 mb-50">
    <div class="row">
        @foreach($responseData as $data)
        <div class="col-md-4 mt-2">
            <div class="card">
                <div class="card-body">
                    <div class="card-img-actions"> <img src="{{$data->image}}" class="card-img img-fluid" width="80" height="350" alt=""> </div>
                </div>
                <div class="card-body bg-light text-center">
                    <div class="mb-2">
                        <h6 class="font-weight-semibold mb-2"> <a href="#" class="text-default mb-2" data-abc="true">{{$data->name}}</a>
                    </div>
                    <h3 class="mb-0 font-weight-semibold">Tk.{{$data->price}}</h3>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
</body>
</html>