<p>Mahender</p> <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
   var opts = [];
        $checkboxes.each(function(){
          if(this.checked){
            opts.push(this.name);
          }
        });

        return opts;

 $.ajax({
          type: "POST",
          url: "submit.php",
          dataType : 'json',
          cache: false,
          data: {filterOpts: opts},
          success: function(records){
            $('#phones tbody').html(makeTable(records));
          }
        });


</script>
 <input type="checkbox" id="" name="checkboxbrand[]" value="brand1"> Brand1<br>
  <input type="checkbox" name="checkboxbrand[]" value="brand2"> Brand1<br>
    <input type="checkbox" name="checkboxbrand[]" value="brand3"> Brand1<br>
      <input type="checkbox" name="checkboxbrand[]" value="brand4"> Brand1<br>
