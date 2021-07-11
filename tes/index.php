 
<html>
<head> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="styles.css" /> 
  <script src="js/script.js"></script>
</head>
<body>


<div class="place">
<h1>Create new User</h1>
<form id="addnewcust" enctype="multpart/form-data"> 
<div class="form-group">
    <label for="firstname">firstname</label>
    <input  id="firstname" name="firstname" class="form-control" placeholder="lastname" type="text"required/> 
  </div>
  <div class="form-group">
    <label for="lastname">lastname</label>
    <input name="lastname" type="text" class="form-control" id="lastname" placeholder="lastname" required>
  </div>
  <div class="form-group">
    <label for="phone_num">phone number</label>
    <input class="form-control" id="phone_num" placeholder="phone_number" name="phone_num" type="number" required>
  </div> 
<div class="form-group">
<label for="email">Email</label>
<input class="form-control" id="email" name="email" type="email" placeholder="email" required/>
<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
 
<div class="form-group">
    <label for="category">category</label>
    <input type="text" class="form-control" id="category" placeholder="category" name="category" type="text" required>
  </div>

<button type="submit" class="btn btn-primary" id="addRecord" >submit</button>
<input name="userid" type="hidden" id="userid" value=""/><br>
<input name="action" type="hidden" value="adduser"/><br>
</form>
</div>


<div class="place">
<h1>Show All User</h1>
<table class="table">
  <thead>
    <tr>
      
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
      <th scope="col">category</th>
      <th scope="col">edit</th>
    </tr>
  </thead>
  <tbody id="showdata"></tbody>
</table>
</div>
<br>




<div class="place">
<h1>Edit User Data</h1>
<form id="updateuser" enctype="multpart/form-data"> 
<div class="form-group">
    <label for="firstname">firstname</label>
    <input  id="editfirstname" name="firstname" class="form-control" placeholder="lastname" type="text"required/> 
  </div>
  <div class="form-group">
    <label for="lastname">lastname</label>
    <input name="lastname" type="text" class="form-control" id="editlastname" placeholder="lastname" required>
  </div>
  <div class="form-group">
    <label for="phone_num">phone number</label>
    <input class="form-control" id="editphone_num" placeholder="phone_number" name="phone_num" type="number" required>
  </div> 
<div class="form-group">
<label for="email">Email</label>
<input class="form-control" id="editemail" name="email" type="email" placeholder="email" required/>
<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
 
<div class="form-group">
    <label for="category">category</label>
    <input type="text" class="form-control" id="editcategory" placeholder="category" name="category" type="text" required>
  </div>

<button type="submit" class="btn btn-primary" id="addRecord" >submit</button>
<input name="updateuserid" type="hidden" id="updateuserid" /><br>
<input name="action" type="hidden" value="updateuser"/><br>
</form>
</div>





<body>
</html>