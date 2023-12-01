<?php
include 'partials/header.php'
?>
    <section class="form__section">
      <div class="container form__section-container">
        <h2>Add User</h2>

        <div class="alert__message error">
          <p>This is an error message</p>
        </div>
        <form action="<?= ROOT_URL ?>add-user-logic.php" enctype="multipart/form-data" method="POST">
          <input type="text" name="firstname" placeholder="first name" />
          <input type="text" name="lastname" placeholder="last name" />
          <input type="text" name="username" placeholder="username" />
          <input type="email" name="email" placeholder="email" />
          <input type="password" name="createpassword" placeholder="create password" />
          <input type="password" name="confirmpassword" placeholder="confirm password" />
          <select name="userrole">
            <option value="0">Author</option>
            <option value="1">Admin</option>
          </select>
          <div class="form__control">
            <label for="avatar">User avatar </label>
            <input type="file" name="avatar" id="avatar" />
          </div>
          <button type="submit" name="submit" class="btn">Add User</button>
        </form>
      </div>
    </section>

    <?php
include '../partials/footer.php'
    ?>


    <script src="main.js"></script>
  </body>
</html>
