<html>
<head>
<title>Menu</title>
<link rel='stylesheet' type='text/css' href='style.css'>
<style>
#c {border:4px outset black; background-color:#888888;}
#image {width:200px; height:200px;}
</style>
<script>
<!--
function f()
{
document.k.src='72.jpg';
}
function f1(arg,btn)
{
var k=document.getElementById(arg);
var z=document.getElementById(btn);
k.style.height='75px';
z.style.color="red";
z.style.height="60px";
}
function f2(arg,btn)
{
var q=document.getElementById(arg);
var p=document.getElementById(btn);
q.style.height='50px';
p.style.color="black";
p.style.height="50px";
}

var i=1;
function add()
{
document.getElementById('item'+i).innerHTML='Mirinda';
document.getElementById('remove'+i).style.visibility='visible';
i++;
}

var to_rem;
function remove(to_rem)
{
document.getElementById('item'+to_rem).innerHTML='';
//var r=document.getElementById('remove'+to_rem);
//r.style.visibility='hidden';
i--;
rearrange(to_rem);
}

function rearrange(to_rem)
{
while(to_rem<i)
{
var next=to_rem+1;
document.getElementById('item'+to_rem).innerHTML=document.getElementById('item'+next).innerHTML;
document.getElementById('item'+next).innerHTML='';
to_rem++;
}
document.getElementById('remove'+to_rem).style.visibility='hidden';
}

-->
</script>
</head>
<body>
<div id='top' name='top'>
<br>
<h1 name='p'>MENU</h1>
</br>
</div>

<br><br>
<table id='menu' outline='none' name='menu'>
<tr>
<td id='home' name='home' onmouseover="f1('home','a');" onmouseout="f2('home','a');">
<button class='btn' id='a' onclick="window.location.href='home.php'">
Home
</button>
</td>
</tr>
<tr>
<td id='profile' name='profile' onmouseover="f1('profile','b');" onmouseout="f2('profile','b');">
<button class='btn' id='b' onclick="window.location.href='profile.php'">
View Profile
</button>
</td>
</tr>
<tr>
<td id='new' name='new' onmouseover="f1('new','c');" onmouseout="f2('new','c');">
<button class='btn' id='c'>
Menu
</button>
</td>
</tr>
<tr>
<td id='reserve' name='reserve' onmouseover="f1('reserve','d');" onmouseout="f2('reserve','d');">
<button class='btn' id='d' onclick="window.location.href='table.php'">
Reserve a table
</button>
</td>
</tr>
<tr>
<td id='prev' name='prev' onmouseover="f1('prev','e');" onmouseout="f2('prev','e');">
<button class='btn' id='e' onclick="window.location.href='prev.php'">
Previous Orders
</button>
</td>
</tr>
<tr>
<td id='fb' name='fb' onmouseover="f1('fb','f');" onmouseout="f2('fb','f');">
<button class='btn' id='f' onclick="window.location.href='feedback.php'">
Feedback
</button>
</td>
</tr>
<tr>
<td id='contact' name='contact' onmouseover="f1('contact','g');" onmouseout="f2('contact','g');">
<button class='btn' id='g' onclick="window.location.href='contact.php'">
Contact Us
</button>
</td>
</tr>
</table>

<div id='sidebar'>
<img src='85.jpg' id='sbar_pic'>
<div class ='design'>
Select By Category
</div>
<div id='list'>
<p>
<a href='#bvr' class='links'>
Beverages
</a>
</p>
<p>
<a href='#soups' class='links'>
Soups
</a>
</p>
<p>
<a href='#breads' class='links'>
Indian Breads
</a>
</p>
<p>
<a href='#rice' class='links'>
Rice and Noodles
</a>
</p>
<p>
<a href='#dishes' class='links'>
Dishes
</a>
</p>
<p>
<a href='#desserts' class='links'>
Desserts
</a>
</p>
</div>
</div>

<div id='cart' name='cart'>
<div class ='design' style="width:300px">
Cart
</div>
<br><br><br>
<table name='items' id='items'>
<tr>
<th width='185px'>
Item
<br><br>
</th>
<th width='30px'>
Qty.
<br><br>
</th>
<th>
Amount
<br><br>
</th>
</tr>
<tr>
<td id='item1'>
</td>
<td id='qty1'>
</td>
<td id='amt1'>
</td>
<td>
<button class='remove' id='remove1' onclick='remove(1);' title='Remove from Cart'>-</button>
</td>
</tr>
<tr>
<td id='item2'>
</td>
<td id='qty2'>
</td>
<td id='amt2'>
</td>
<td>
<button class='remove' id='remove2' onclick='remove(2);' title='Remove from Cart'>-</button>
</td>
</tr>
<tr>
<td id='item3'>
</td>
<td id='qty3'>
</td>
<td id='amt3'>
</td>
<td>
<button class='remove' id='remove3' onclick='remove(3);' title='Remove from Cart'>-</button>
</td>
</tr>
<tr>
<td id='item4'>
</td>
<td id='qty4'>
</td>
<td id='amt4'>
</td>
<td>
<button class='remove' id='remove4' onclick='remove(4);' title='Remove from Cart'>-</button>
</td>
</tr>
<tr>
<td id='item5'>
</td>
<td id='qty5'>
</td>
<td id='amt5'>
</td>
<td>
<button class='remove' id='remove5' onclick='remove(5);' title='Remove from Cart'>-</button>
</td>
</tr>
<tr>
<td id='item6'>
</td>
<td id='qty6'>
</td>
<td id='amt6'>
</td>
<td>
<button class='remove' id='remove6' onclick='remove(6);' title='Remove from Cart'>-</button>
</td>
</tr>
<tr>
<td id='item7'>
</td>
<td id='qty7'>
</td>
<td id='amt7'>
</td>
<td>
<button class='remove' id='remove7' onclick='remove(7);' title='Remove from Cart'>-</button>
</td>
</tr>
</table>
</div>

<div id='m' name='m'>
<br>
<table class='food' name='beverages'>
<tr>
<th colspan=4 class='category'> 
<a name='bvr'> 
Beverages
</a>
<br><br>
</th>
</tr>
<tr>
<td width='25px'>
</td>
<td width='380px'>
Coke
</td>
<td>
20
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(1);'>+</button>
</td>
</tr>
<tr>
<td>
</td>
<td>
Pepsi
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(2);'>+</button>
</td>
</tr>
<tr>
<td>
</td>
<td>
Mirinda
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(3);'>+</button>
</td>
</tr>
<tr>
<td>
</td>
<td>
Mountain Dew
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(4);'>+</button>
</td>
</tr>
<tr>
<td>
</td>
<td>
Sprite
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(5);'>+</button>
</td>
</tr>
<tr>
<td>
</td>
<td>
Cold Coffee
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(6);'>+</button>
</td>
</tr>
<tr>
<td>
</td>
<td>
Ice Tea
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(7);'>+</button>
</td>
</tr>

</table>

<table class='food'>
<tr>
<th colspan=4 class='category'> 
<a name='soups'> 
Soups
</a>
<br><br>
</th>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Veg. Hot & Sour Soup
</td>
<td>
20
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(8);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Spanish Mushroom Soup
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(9);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Lemon Coriander Soup
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(10);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Sweet Corn Soup
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(11);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Chicken Spicy Soup
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(12);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Chicken Sweet Corn Soup
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(13);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Lamb Delight Soup
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(14);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Prawns Malabar Soup
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(15);'>+</button>
</td>
</tr>
</table>

<br>

<table class='food'>
<tr>
<th colspan=4 class='category'> 
<a name='breads'> 
Indian Breads
</a>
<br><br>
</th>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td width='380px'>				
Butter Naan
</td>
<td>
20
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(16);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Plain Naan
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(17);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Onion Paratha
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(18);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Paratha
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(19);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Tandoori Roti
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(20);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Parantha
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(21);'>+</button>
</td>
</tr>
</table>

<br>

<table class='food'>
<tr>
<th colspan=4 class='category'> 
<a name='rice'> 
Rice and Noodles
</a>
<br><br>
</th>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Veg Fried Rice
</td>
<td>
20
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(22);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Veg Hakka Noodles
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(23);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Veg Chilly Garlic Rice
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(24);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Veg Chilly Garlic Noodles
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(25);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Veg Chopsuey
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(26);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Veg Shezwan Fried Rice
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(27);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Veg Shezwan Noodles
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(28);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Egg Fried Rice
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(29);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Egg Noodles
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(30);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Egg Chilly Garlic Noodles 
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(31);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Egg Chilly Garlic Rice
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(32);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Chicken Hakka Noodles
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(33);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Chicken Fried Rice
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(34);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Chicken Shezwan Noodles
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(35);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Chicken Shezwan Rice
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(36);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
American Chicken Chopsuey
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(37);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Prawns Rice
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(38);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Prawns Noodles
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(39);'>+</button>
</td>
</tr>
</table>

<br>

<table class='food'>
<tr>
<th colspan=4 class='category'> 
<a name='dishes'> 
Dishes
</a>
<br><br>
</th>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Veg Manchurian Dry
</td>
<td>
20
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(40);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Chilly Potato
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(41);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Chiily Paneer Dry
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(42);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Paneer Roll
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(43);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Paneer Manchurian
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(44);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Butter Paneer
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(45);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Cauliflower Manchurian
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(46);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Mushroom Garlic 
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(47);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Butter Chicken
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(48);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Chicken 65
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(49);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Chicken Manchurian
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(50);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Garlic Chicken
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(51);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Chicken Lolli Pop
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(52);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Lamb with Oyster Sauce
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(53);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Egg Masala
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(54);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Grilled Fish 
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(55);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='h.jpg' width='15px' height='15px'>
</td>
<td>
Prawns Hot Garlic 
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(56);'>+</button>
</td>
</tr>
</table>

<br>

<table class='food'>
<tr>
<th colspan=4 class='category'> 
<a name='desserts'> 
Desserts
</a>
<br><br>
</th>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Vanilla Ice Cream
</td>
<td>
20
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(57);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Strawberry Ice Cream
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(58);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Butterscotch Ice Cream
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(59);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Pineapple Ice Cream
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(60);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Chocobar
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(61);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Choco Lava Cake
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(62);'>+</button>
</td>
</tr>
<tr>
<td>
<img src='g.jpg' width='15px' height='15px'>
</td>
<td>
Butter Pastry
</td>
<td>
</td>
<td>
<button class='add' title='Add to Cart' onclick='add(63);'>+</button>
</td>
</tr>
</table>

</div>

</body>
</html>