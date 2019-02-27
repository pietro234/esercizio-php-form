<?php

     $name= $_POST[''];



          
?>










<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
      <h1>Hello, world!</h1>
      <form>   
        <div class="form-group">
          <label for="exampleInputEmail1">Nome</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="inserisci il nome">
        </div>
         <div class="form-group">
          <label for="exampleInputEmail1">Cognome</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="inserisci il cognome">
        </div>
        <div class="form-group">
          <label for="exampleFormControlTextarea1">Example textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" aria-describedby="indirizzoHelp" rows="3"></textarea>
          <small id="indirizzoHelp" class="form-text text-muted">Deve contenere la via, c.a.p. e provincia.</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></scrip