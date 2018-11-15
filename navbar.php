<?php
<head>
<link rel="style" href="css/navbar.css" type="text/css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <div class="container-fluid">
    <!-- Navigation tab bar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#home" class="pull-left">Aaron Young</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right" id="nav">
          <li class="active"><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#education">Background</a></li>
          <li><a href="#work">Work</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>

    <!-- For testing purposes -->
    <div id="home" class="section"><h1>Home</h1></div>
    <div id="about" class="section"><h1>About</h1></div>
    <div id="education" class="section"><h1>Background</h1></div>
    <div id="work" class="section"><h1>Work</h1></div>
    <div id="projects" class="section"><h1>Projects</h1></div>
    <div id="contact" class="section"><h1>Contact</h1></div>
  </div>
   <script type="text/javascript" src="navbar.js"></script>

</body>
?>