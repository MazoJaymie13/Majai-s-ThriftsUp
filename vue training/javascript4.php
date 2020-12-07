<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    
   .test{

       margin-top:10px;
   }
    </style>
</head>
<body>

    <h1>Employee Information</h1>
    <label >Employee No.</label>
    <input type="text" id="txtEmpNumber">
    <label > Employee Name</label>
    <input type="text" id="txtEmpName">
    <div class="test">
    <label  > Birthday</label> 
    <input type="date" id="txtBirthDate" style="margin-left:15px">
    <label > Date Hired</label>
    <input type="date" id="txtDateHired">
    </div>
  
    <button id="add">Save/Add</button>

    <table border="1">
    <thead>
    <tr>
        <th>Employee No.</th>
        <th>Employee Name</th>
        <th>Birth Date</th>
        <th>Date Hired</th>
    </tr>
    </thead>

    <tbody id="tbody">
    </tbody>
    </table>


    <script src="http://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="vue.js"></script>
    <script src="js/Myscript.js"></script>
    
    <script>

   
</script>
</body>
</html>