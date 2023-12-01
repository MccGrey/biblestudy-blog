<?php
include 'partials/header.php'
?>
    <section class="form_section">
      <div class="form__section">
        <div class="container form__section-container">
          <h2>Add Post</h2>

          <div class="alert__message error">
            <p>This is an error message</p>
          </div>
          <form action="" enctype="multipart/form-data">
            <input type="text" placeholder="Title" />
            <select>
              <option value="1">Travel</option>
              <option value="1">Art</option>
              <option value="1">Science and Technology</option>
              <option value="1">Food</option>
              <option value="1">Music</option>
              <option value="1">Wild Life</option>
            </select>
            <textarea rows="10" placeholder="Body"></textarea>

            <div class="form__control inline">
              <input type="checkbox" id="is_featured" checked />
              <label for="is_featured">Featured</label>
            </div>

            <div class="form__control">
              <label for="thumbnail">Add Thumbnail</label>
              <input type="file" id="thumbnail" />
            </div>
            <button type="submit" class="btn">Add Post</button>
          </form>
        </div>
      </div>
    </section>


    
    <?php
include '../partials/footer.php'
    ?>

    <script src="main.js"></script>
  </body>
</html>
