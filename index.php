<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Node js Test</title>
    <!--<script src="app.js"></script>-->
    <script>
      var express=require('express');
      var app=express();
      app.post('/webhook', (req, res) => {
        res.sendStatus(200)
      })
    </script>
    </head>
  <body>
    
  </body>
</html>
