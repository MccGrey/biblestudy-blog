<?php
include 'partials/header.php'
?>

    <div class="form__section">
      <div class="container form__section-container">
        <h2>Add Category</h2>

        <div class="alert__message error">
          <p>This is an error message</p>
        </div>
        <form action="<?= ROOT_URL ?>admin/add-category-logic.php" method="POST">
          <input type="text" name="title" placeholder="Title" />
          <textarea rows="4" name="description" placeholder="Description"></textarea>
          <button type="submit" name="submit" class="btn">Add Category</button>
        </form>
      </div>
    </div>

    <?php
include '../partials/footer.php'
    ?>

    <script src="main.js"></script>
  </body>
</html>
