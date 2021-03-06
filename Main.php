<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Majai Thriftup System</title>
    <link rel="stylesheet" href="./css/style.css"></link>
    <link rel="stylesheet" href="../../bootstrap4/dist/css/bootstrap.min.css"></link>
    <link rel="stylesheet" 
    href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></link>

<style>

}
</style>
</head>
<body onload="showContent('cat_women')">   
    <div id="myHeader">
        <div  class="header">
        <label > Majai's ThriftUp</label>
        </div>
 
    <div class="tab"  > 
                <button  class="tablinks" onmouseover="CallTab(event, 'Shop')">
                <i class="fas fa-shopping-cart"></i>
                Shop</button>   
                <button class="tablinks" onmouseover="CallTab(event, 'Sell')">
                <i  class="fa fa-money-bill-alt" ></i> Sell</button>               
    </div>
    <div>


    <div id="Shop" class="tabcontent">
        <div class="tab">
        <button onclick="showContent('cat_women')">Women's Clothes</button>
        <button onclick="showContent('cat_baby')">Baby's Clothes</button>
        <button onclick="showContent('cat_men')">Men's Clothes</button>
        <button onclick="showContent('cat_gadgets')">Gadgets</button>
        <button onclick="showContent('cat_furniture')">Furnitures</button>
        <button onclick="showContent('cat_bags')">Bags</button>
        <button onclick="showContent('cat_shoes')">Shoes</button>
        <button onclick="showContent('cat_accesories')">Accessories</button>
        <button onclick="showContent('cat_school')">School Supplies</button>
        </div>
    </div>

    <div id ="Sell" class="tabcontent">
        <div class="tab">
            <button>Payouts</button>
            <button>Cash </button>
        </div>
    </div>
    </div>

    <div  id="cat_women" class="content">
        <form  class="categoryfrm">
            <h4 >Category</h4> 
            <input type="radio" name="women" >Pants <br>
            <input type="radio" name="women" >Skirts    <br>
            <input type="radio" name="women" >Sando <br>
            <input type="radio" name="women" >Tshirts  <br>
            <input type="radio" name="women" >Coats  <br>
            <input type="radio" name="women" >Jackets <br>
            <input type="radio" name="women" >Sweaters    <br>
            <input type="radio" name="women" >Shorts <br>
            <input type="radio" name="women" >Sports Wear  <br>
            <input type="radio" name="women" >Swim Wear  <br>
            <input type="radio" name="women" >Tops  <br>
            <input type="radio" name="women" >Dresses  <br>
            <h4 >Sizes</h4> 
            <button class="s_button">XXS</button>
            <button  class="s_button">XS</button>
            <button  class="s_button">SM</button>
            <button  class="s_button">MED</button>

            <div style ="margin:2px 0px">
                <button  class="s_button">LG</button>
                <button  class="s_button">XL</button>
                <button  class="s_button">XXL</button>
                <button  class="s_button">OL</button>
            </div>

            <div style ="margin:2px 0px">
                <button  class="s_button">1X</button>
                <button  class="s_button">2X</button>
                <button  class="s_button">3X</button>
                <button  class="s_button">4X</button>
            </div>
      
                <h4 >Brands</h4> 
                <input type="checkbox" name="Forever21" >Forever 21 <br>
                <input type="checkbox" name="Penshoppe" >Penshoppe    <br>
                <input type="checkbox" name="Bread" > Bread 'n Butter <br>
                <input type="checkbox" name="Levis" > Levis <br>
                <input type="checkbox" name="BananaRep" >Banana Republic  <br>
                <input type="checkbox" name="Jags" >Jags <br>
                <input type="checkbox" name="RRj" >RRJ <br>
                
        </form>
    </div>

    <div id="cat_baby"  class="content" cols=6 style="display:table">
        <div class="row">
            <div class="col-sm-3">
                
                <form class="categoryfrm"   > 
                    <h4>Babies Age</h4>
                    <input type="radio" name="baby" >Pants <br>
                    <input type="radio" name="baby" >Sando <br>
                    <input type="radio" name="baby" >Tshirts  <br>
                </form>
            </div>
            <div class="col-sm-9">
                <div class="clrfix ml-3" id="baby_images"></div>
            </div>
        </div>
                
    </div>
 

    <div   id="cat_men" class="content">
        <form class="categoryfrm" >
            <h4>Category</h4>
            <input type="radio" name="men" >Pants <br>
            <input type="radio" name="men" >Sando <br>
            <input type="radio" name="men" >Tshirts  <br>
            <input type="radio" name="men" >Coats  <br>
            <input type="radio" name="men" >Jackets <br>
            <input type="radio" name="men" >Sweaters    <br>
            <input type="radio" name="men" >Shorts <br>
            <input type="radio" name="men" >Sports Wear  <br>
            <input type="radio" name="men" >Swim Wear  <br>
        </form>
    </div>


    <div  id="cat_gadgets" class="content">
        <form class="categoryfrm" >
            <h4>Gadgets Category</h4>
            <input type="radio" name="gadget" >Phones <br>
            <input type="radio" name="gadget" >Printer <br>
            <input type="radio" name="gadget" >Camera <br>
            <input type="radio" name="gadget" >laptops <br>
            <input type="radio" name="gadget" >Smart Watches  <br>
            <input type="radio" name="gadget" >Computers  <br>
            <input type="radio" name="gadget" >Head Phones <br>
            <input type="radio" name="gadget" >Sweaters    <br>
            <input type="radio" name="gadget" >Security Camera<br>
            <input type="radio" name="gadget" >game Console<br>
        </form>
    </div>


    <div  id="cat_furniture" class="content">
        <form class="categoryfrm" >
            <h4>Furnitures Category</h4>
            <input type="radio" name="Furniture" >Sofa<br>
            <input type="radio" name="Furniture" >Beds <br>
            <input type="radio" name="Furniture" >Bed Sheets<br>
            <input type="radio" name="Furniture" >Desk<br>
            <input type="radio" name="Furniture" >Mattresses<br>
            <input type="radio" name="Furniture" >Bedroom Dresser<br>
            <input type="radio" name="Furniture" >Tv Stands<br>
            <input type="radio" name="Furniture" >Coffee Table<br>
            <input type="radio" name="Furniture" >Organizer<br>
        </form>
    </div>
    
    <div  id="cat_bags" class="content">
        <form class="categoryfrm" >
            <h4>Bags Category</h4>
            <input type="radio" name="bags" >Sofa<br>
            <input type="radio" name="bags" >Beds <br>
            <input type="radio" name="bags" >Bed Sheets<br>
            <input type="radio" name="bags" >Desk<br>
            <input type="radio" name="bags" >Mattresses<br>
            <input type="radio" name="bags" >Bedroom Dresser<br>
            <input type="radio" name="bags" >   Tv Stands<br>
            <input type="radio" name="bags" >Coffee Table<br>
            <input type="radio" name="bags" >Organizer<br>
        </form>
    </div>

    <div  id="cat_shoes" class="content">
        <form class="categoryfrm" >
            <h4>Shoes Category</h4>
            <input type="radio" name="shoes" >Boots<br>
            <input type="radio" name="shoes" >Flats <br>
            <input type="radio" name="shoes" >Sandals<br>
            <input type="radio" name="shoes" >Heels<br>
            <input type="radio" name="shoes" >Wedges<br>
            <input type="radio" name="shoes" >Sneakers<br>
        </form>
    </div>

    
    <div  id="cat_accesories" class="content">
        <form class="categoryfrm" >
            <h4>Accesories Category</h4>
            <input type="radio" name="acc" >Belts<br>
            <input type="radio" name="acc" >Hats <br>
            <input type="radio" name="acc" >Gloves<br>
            <input type="radio" name="acc" >Scarves<br>
            <input type="radio" name="acc" >Sunglasses<br>
            <input type="radio" name="acc" >Tights<br>
            <input type="radio" name="acc" >Watches<br>
            <input type="radio" name="acc" >Make-up<br>
            <input type="radio" name="acc" >Card holders<br>
        </form>
    </div>

    <div  id="cat_school" class="content">
        <form class="categoryfrm" >
            <h4>School Supplies Category</h4>
            <input type="radio" name="school" >Pens<br>
            <input type="radio" name="school" >Papers <br>
            <input type="radio" name="school" >Clays<br>
            <input type="radio" name="school" >Measuring<br>
            <input type="radio" name="school" >Folders<br>
            <input type="radio" name="school" >Paste<br>
            <input type="radio" name="school" >Notebooks<br>
            <input type="radio" name="school" >Books<br>
            <input type="radio" name="school" >Scissors<br>
        </form>
    </div>

</div>
<script src="../../jquery/dist/jquery.min.js"></script>
<script href="../../bootstrap4/dist/js/bootstrap.min.js"></script>
<script src="js/myscript.js"></script>
<script>
// sticky Headers
window.onscroll = function() {myFunction()};
var header = document.getElementById("myHeader");
var sticky = header.offsetTop;
function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}

// Navigation Tab 
        function CallTab(evt,tabname) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabname).style.display = "block";
        evt.currentTarget.className += " active";
        }  

// show categories based on Menu button
    function showContent(str) {
    var test= ["cat_women" , "cat_baby" , "cat_men" , "cat_gadgets" , "cat_furniture", "cat_bags", "cat_shoes", "cat_accesories", "cat_school"];

            for(i= 0 ; i<test.length; i++){
                    var  str1 =str;
                    var str2=test[i];
                    var Result=str1.localeCompare(str2);
                    if ( Result ==0){
                    //    alert(test[i]) ;
                        document.getElementById(test[i]).style.display="block";    
                        }
                    else {
                        document.getElementById(test[i]).style.display="none";    
                            }
            }
    }

    function  category_check(item, index, arr){
      alert (test);
    }
        </script>
</body>
</html>


