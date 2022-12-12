<?php include 'header.php'; ?>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
/*  float: right;*/
margin-top: 2%;
margin-left: 31%;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<div class="container">
  <form action="/action_page.php">
    <!-- <div class="row">
      <div class="col-25">
        <label for="fname">Id</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="">
      </div>
    </div> -->
    <div class="row">
      <div class="col-25">
        <label for="lname">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="user@gmail.vom">
      </div>
    </div>
    
    
    <div class="row">
      <div class="col-25">
        <label for="lname">Title</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Title">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Problem</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Problem">
      </div>
    </div>
    
    <div class="row">
      <div class="col-25">
        <label for="lname">Description</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Description">
      </div>
    </div>
    
   <div class="row">
      <div class="col-25">
        <label for="lname">Method</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Method">
      </div>
    </div>
    
    
    <div class="row">
      <div class="col-25">
        <label for="lname">Usage</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Usage">
      </div>
    </div>
    
    
    <div class="row">
      <div class="col-25">
        <label for="lname">User Tips</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="User tips">
      </div>
    </div>
    
    
    <div class="row">
      <div class="col-25">
        <label for="lname">Contact</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="only 12 digits are allowed">
      </div>
    </div>
    
    
    
    <div class="row">
      <div class="col-25">
        <label for="subject">Address</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Address" style="height:50px"></textarea>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
     <label for="myfile">Select files:</label>
     </div>
      <div class="col-75">
  <input type="file" id="myfile" name="myfile" style="margin-top: 11px; " multiple><br><br>
 </div>
    </div>
    <div class="row">
      <input type="submit" value="POST">
    </div>
  </form>
</div>

<?php include 'footer.php'; ?>