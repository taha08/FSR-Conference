<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<body style="font-family:Arial;font-size:12pt">
  <head>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"/>
    
    <link rel="shortcut icon" type="image/png" href="images/logo.png"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <link rel="stylesheet" href="css/font-awesome.css"/>
    <link rel="stylesheet" href="css/style.css"/>
      
</head>
<?php

?>



<div class="form-group">

  <ol>
      <xsl:for-each select="register/participant">
        <xsl:sort select="firtName" data-type="text"/>
        <li>
         <label for="exampleInputEmail1">   <xsl:value-of select="firtName"/></label>
          
        </li>
      </xsl:for-each>
    </ol>

    </div>
</body>
</html>