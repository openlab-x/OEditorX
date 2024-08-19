<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OEditorX (Online EditorX)</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .navbar-custom {
      background-color: black;
    }
    .navbar-custom .navbar-nav .nav-link {
      color: white;
    }
    .navbar-custom .navbar-text {
      color: white;
    }
    .dropdown-toggle {
      color: white;
     
      
    }
    .footer-custom {
      background-color: black;
      color: white;
      font-family: "Droid Sans Mono", monospace, monospace, "Droid Sans Fallback";
  font-size: 13px;
  text-align: center;
    }
    .example-custom {
      background-color: #d8ab4e;
    }
  </style>

<link rel="apple-touch-icon" sizes="180x180" href="static/images/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="static/images/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="static/images/favicon_io/favicon-16x16.png">
<link rel="manifest" href="static/images/favicon_io/site.webmanifest">


</head>
<body onLoad="handleRun()">

<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
  <div class="container-fluid">
    <a class="navbar-brand" href="https://openlabx.com/oeditorx"><img src="static/images/ok.png" alt="Logo" height="40">Online EditorX</a>

  

    <?php
include_once($_SERVER['DOCUMENT_ROOT'].'/oeditorx/templates/themes.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/oeditorx/templates/examples.php');
?>
<ul class="list-group list-group-horizontal mx-2">
<li class="list-group-item ">
<!-- Light Theme Dropdown -->
<div class="item borderless ">
  <select id="lightThemeDropdown" class="ui dropdown" onchange="changeTheme(this.value, 'light')">
    <?php foreach ($ace_light as $theme => $label): ?>
      <option value="<?= $theme ?>"><?= $label ?></option>
    <?php endforeach; ?>
  </select>
</div>
</li>
<li class="list-group-item ">
<!-- Dark Theme Dropdown -->
<div class="item borderless">
  <select id="darkThemeDropdown" class="ui dropdown" onchange="changeTheme(this.value, 'dark')">
    <?php foreach ($ace_dark as $theme => $label): ?>
      <option value="<?= $theme ?>"><?= $label ?></option>
    <?php endforeach; ?>
  </select>
</div>
</li>

<!-- Example Dropdown -->
<li class="list-group-item">
  <div class="item borderless">
    <select id="exampleDropdown" class="ui dropdown" onchange="loadExample(this.value)" >
      <?php foreach ($examples as $example => $example_url): ?>
        <option value="<?php echo $example_url; ?>"><?php echo $example; ?></option>
      <?php endforeach; ?>
    </select>
  </div>
</li>



</ul> 

<!-- <div class="d-flex justify-content-center align-items-center flex-grow-1">  -->
    <div class="d-flex align-items-center flex-grow-1  "> 
    <ul class="list-group list-group-horizontal">
  <!-- <li class="list-group-item example-custom mx-2 ">Example: Text Colors</li>

</ul> -->
   
      <button id="runButton" class="btn btn-primary" onclick="handleRun()">
        &blacktriangleright; Run (Ctrl + ↵)
      </button>
    </div>

    
    <div class="dropdown">
      <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" >
        More
      </button>
      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#">View Source code on GitHub</a></li>
        <li><a class="dropdown-item" href="#">Report an Issue</a></li>
        <li><a class="dropdown-item" href="#">Subscribe to OpenLabX newsletter</a></li>
        <li><a class="dropdown-item" href="#">Contact OpenLabX</a></li>
        <li><a class="dropdown-item" href="#">Join us on social media</a></li>
      </ul>
    </div>
  </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<?php
    include($_SERVER['DOCUMENT_ROOT'] . '/oeditorx/src/style.php');
    ?>
    <div id="container">
    <div  id="url" class="lm_header bg-dark text-light" ><?php echo $example_url;?></div>
    <div  id="output" class="lm_header bg-dark text-light" >Output</div>
    </div>
<div id="container">


        <div  id="htmleditor"><!--here put the code, start--><textarea>
<!-- © 2023-<?php echo date("Y"); ?> Copyright codeskit.com -->
<!--Example: <?php echo $example_name ?>-->
