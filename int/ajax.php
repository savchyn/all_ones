 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
//the variable to be appended here
$("#ajaxtrigger").append("<ul></ul>");
});
$.ajax({
type: "GET",
url: "http://allinone-mexico.com/admon/mxml_acceso.asp?usr=dvte4000&pwd=1234",
dataType: "html",
success: function(html) {
alert(xml);
}
$(xml).find('id').each(function(){
var Titles = $(this).find('id').text();
var Manufacturers = $(this).find('id').text();
$("<li></li>").html(Titles + "-" + Manufacturers).appendTo("#abc ul");
});
error: function() {
alert("The XML File could not be processed correctly.");
}
});

</script>
<div id="abc">
<ul></ul>
</div>
<p id="result" class="result"> </p>
<a href="http://allinone-mexico.com/admon/mxml_acceso.asp?usr=dvte4000&pwd=1234" class="ajaxtrigger">load some content</a>
<input type="submit" id="ajaxtrigger" value="Click" onclick="getState()">
