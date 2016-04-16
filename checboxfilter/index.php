
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>AJAX Search filter demo</title>
<style>
body {
padding: 10px;
}
 
h1 {
margin: 0 0 0.5em 0;
color: #343434;
font-weight: normal;
font-family: 'Ultra', sans-serif;
font-size: 36px;
line-height: 42px;
text-transform: uppercase;
text-shadow: 0 2px white, 0 3px #777;
}
h2 {
margin: 1em 0 0.3em 0;
color: #343434;
font-weight: normal;
font-size: 30px;
line-height: 40px;
font-family: 'Orienta', sans-serif;
}
 
#employees {
font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
font-size: 12px;
background: #fff;
margin: 15px 25px 0 0;
border-collapse: collapse;
text-align: center;
float: left;
width: 700px;
}
 
#employees th {
font-size: 14px;
font-weight: normal;
color: #039;
padding: 10px 8px;
border-bottom: 2px solid #6678b1;
}
 
#employees td {
border-bottom: 1px solid #ccc;
color: #669;
padding: 8px 10px;
}
 
#employees tbody tr:hover td {
color: #009;
}
 
#filter {
float:left;
}
</style>
</head>
<body>
<h1>Demo</h1>
 
<table id="employees">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Age</th>
<th>Address</th>
<th>Car</th>
<th>Language</th>
<th>Nights</th>
<th>Student</th>
</tr>
</thead>
<tbody>
</tbody>
</table>
 
<div id="filter">
<h2>Filter options</h2>
<div>
<input type="checkbox" id="car" name="hasCar">
<label for="car">Has own car</label>
</div>
<div>
<input type="checkbox" id="language" name="speaksForeignLanguage">
<label for="language">Can speak foreign language</label>
</div>
<div>
<input type="checkbox" id="nights" name="canWorkNights">
<label for="nights">Can work nights</label>
</div>
<div>
<input type="checkbox" id="student" name="isStudent">
<label for="student">Is a student</label>
</div>
</div>
 
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
function makeTable(data){
var tbl_body = "";
$.each(data, function() {
var tbl_row = "";
$.each(this, function(k , v) {
tbl_row += "<td>"+v+"</td>";
})
tbl_body += "<tr>"+tbl_row+"</tr>";
})
 
return tbl_body;
}
 
function getEmployeeFilterOptions(){
var opts = [];
$checkboxes.each(function(){
if(this.checked){
opts.push(this.name);
}
});
 
return opts;
}
 
function updateEmployees(opts){
$.ajax({
type: "POST",
url: "search.php",
dataType : 'json',
cache: false,
data: {filterOpts: opts},
success: function(records){
$('#employees tbody').html(makeTable(records));
}
});
}
 
var $checkboxes = $("input:checkbox");
$checkboxes.on("change", function(){
var opts = getEmployeeFilterOptions();
updateEmployees(opts);
});
 
updateEmployees();
</script>
</body>
</html>
