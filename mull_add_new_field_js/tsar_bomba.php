<html>
<header>
    <script type="text/javascript" src="jquery-1.6.2.min.js"></script>
</header>
<body>
<div class='container'>
    Tipe
    <select name="type[]" >
  <option value="Dewasa">Dewasa</option>
  <option value="Remaja">Remaja</option>
  <option value="Anak-anak">Anak-anak</option>
  
    </select>
    Nama<input type='text' name='name[]'>
    Umur<input type='text' name='age[]'>
    Alamat<input type='text' name='address[]'>
    Tiket<input type='text' name='tiket[]'>
    
</div>
<button id='add'>Add</button>
</body>
</html>
<script>
$(document).ready(function() {
    var removeButton = "<button id='remove'>Remove</button>";
    $('#add').click(function() {
        $('div.container:last').after($('div.container:first').clone());
        $('div.container:last').append(removeButton);

    });
    $('#remove').live('click', function() {
        $(this).closest('div.container').remove();
    });
});
</script>