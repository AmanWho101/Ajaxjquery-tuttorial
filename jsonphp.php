<!DOCTYPE html>
<html>
<body>

<h2>Get JSON Data from a PHP Server</h2>
<p id="demo"></p>

<script>
const xmlhttp = new XMLHttpRequest();

xmlhttp.onload = function() {
  const myObj = JSON.parse(this.responseText);
  document.getElementById("demo").innerHTML ='name->' + myObj.name + 'age->' + myObj.age + 'city->' + myObj.city;
}
xmlhttp.open("GET", "jphp.php");
xmlhttp.send();
</script>

</body>
</html>