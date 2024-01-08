<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mystore zone</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
   <link rel="stylesheet" href=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
 <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
*{margin: 0;
padding: 0;
box-sizing: border-box;}
   body{background: rgba(99, 193, 221, 0.836);}
    .red{position: absolute;
      width:100vw;
     top:600vh;
      }
      .red h1{font-size:x-large;
      text-align: center;}
      .footer{
        font-family: 'Poppins', sans-serif;
      }
      .sliderpanel{width:100vw;
      height:500px;}
      .search-box{width:400px;}
      .shopitem{width:100vw;
      text-align: center;
    margin:10px 0;} 
      @media screen and (max-width:600px) {.search-box{width:200px;}
      .pink{width: 350px;
  height: 400px;
cursor: pointer;
font-family: 'Karla', sans-serif;
margin: 10px 0px;
}
.img2{width:300px;
height:250px;}
.red{position:absolute;
top:750vh;}
.shopitem{width:100vw;
      text-align: center;
    margin:10px 0;}

  .listsu{margin: 5px 0;}
        
      }

      footer{font-family: 'Gabarito', sans-serif;
    width:25px;}
    .pinker{width:100vw;
    height:400px;}
    .sliderpanel{width:90vw;
    height:auto;
  margin: 0 auto;}
    .cart{width:60px;}
   
    main h1{text-align: center;
    font-family: 'Croissant One', cursive;}
    .paynow,.pink h2 a{text-decoration: none;
      font-family: 'Karla', sans-serif;
    }
    .listsu,.listsu a{list-style: none;
    text-decoration:none;
    overflow: hidden;
    background: green;
    text-align:center;}
    .listsu{border:1px solid red;
      border-radius:25px;
      margin-left:5px;
    width:90px;}
  main{width:100vw;
margin: 20px 45px ;
padding: 0;}
  .pink{width: 350px;
  height: 400px;
cursor: pointer;
font-family: 'Karla', sans-serif;
margin: 10px 0px;
}
.img2{width:300px;
height:250px;}
  .flex1{width: 100vw;
    display: flex;
    flex-direction: row;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    row-gap: 100px;
    column-gap: 40px;
    padding-right: 20x;
  }
  .img2:hover{width: 350px;
  height: 250px;}

  
  .hilight{background: yellow;
color:;}
.detailimg{width: 300px;
height: 400px;}
 </style>
</head>
<body>
    {{View::make('header')}}
    @yield("content")
    {{View::make('footer')}}



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function(){
         
    });
   
</script>
</body>
</html>