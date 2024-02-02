<?php
include('header.php');
include('check_session.php');
?>

<div class ="container mt-5">
    <h2 class="mb-4">Add News Form</h2>

    <Form id="addNewsForm">
        <div class="form group">
            <label for="judul">Tittle:</label>
            <input type="text" class="form-control" maxlength="50" id="judul" name="judul" required>
</div>

<div class="form group">
            <label for="deskripsi">Content:</label>
            <textarea class="form-control" id="form-control"  id="deskripsi" name="deskripsi" required></textarea>
</div>
            <div class="form group">
            <label for="url_image">Image:</label>
            <input type="file" class="form-control"  id="url_image" name="url_image" accept="image/*" required>
</div>

<button type="button" class="btn btn-primary" onclik="addNews()">Add News</button>
</form>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    function addNews(){
      const judul = document.getElementById('judul').value;
      const deskripsi = document.getElementById('deskripsi').value;
      const urlImageInput = document.getElementById('url_image').value;
const url_image = urlImage.files[0];
const tanggal = new Date().toiSOString().split('T')[0];
// Get form data
var formData = new FormData();
forData,append('judul', judul);
forData,append('deskripsi', deskripsi);
forData,append('url_image', url_image);
forData,append('tanggal', tanggal);

// Make post requesrt using axios
axios.post ('https://tugaswebpatricia.000webhostapp.com/addnews.php', formData, {
 headers:{ 
    'content-Type': 'multipart/form-data',
 },
})
.then(function(response){
    console.log(response.data);
    console.log(FormData);
    alert(response.data); // you can handle response as needed
    document.getElementById('addNewsForm').reset();

})
.catch(function(error){
    alert('Error adding news.');// Handle error approriately

});

    }
    </script>