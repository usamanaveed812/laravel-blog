<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body { 
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
</style>
</head>
<body>

<div class="header">
  <img style="display: inline;" src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fcdn.freebiesupply.com%2Flogos%2Flarge%2F2x%2Fpost-3-logo-png-transparent.png&imgrefurl=https%3A%2F%2Ffreebiesupply.com%2Flogos%2Fpost-logo-4%2F&tbnid=L_sIbm8yXUYU4M&vet=12ahUKEwj0uoKj-K74AhVNEhoKHTprC1UQMygAegUIARC8AQ..i&docid=Fwn0R09huaEUjM&w=2400&h=2346&q=posts%20logo&ved=2ahUKEwj0uoKj-K74AhVNEhoKHTprC1UQMygAegUIARC8AQ" alt="logo" />
  
  <div class="header-right">
    <a class="active" href="#home">Posts</a>
    <a href="#contact">Logout</a>
    <a href="#about">Login</a>
  </div>
</div>



</body>
</html>
