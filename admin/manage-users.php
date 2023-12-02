<?php
include 'partials/header.php'
?>

    <section class="dashboard">

    <?php if(isset($_SESSION['add-user-success'])) : ?>
          <div class="alert__message success container">
          <p><?= $_SESSION['add-user-success']; 
                  unset($_SESSION['add-user-success']);
          ?></p>
        </div>


          <?php endif ?>
      <div class="container dashboard__container">
        <button class="sidebar__toggle" id="show__sidebar-btn">
          <i class="uil uil-angle-right-b"></i>
        </button>
        <button class="sidebar__toggle" id="hide__sidebar-btn">
          <i class="uil uil-angle-left-b"></i>
        </button>
        <aside>
          <ul>
            <li>
              <a href="add-post.php"
                ><i class="uil uil-pen"></i>
                <h5>Add Post</h5></a
              >
            </li>

            <li>
              <a href="index.php"
                ><i class="uil uil-pen"></i>
                <h5>Manage Posts</h5></a
              >
            </li>
            <?php if(isset($_SESSION['user_is_admin'])) : ?>
            <li>
              <a href="add-user.php"
                ><i class="uil uil-pen"></i>
                <h5>Add User</h5></a
              >
            </li>

            <li>
              <a href="manage-users.php" class="active"
                ><i class="uil uil-pen"></i>
                <h5>Manage User</h5></a
              >
            </li>

            <li>
              <a href="add-category.php"
                ><i class="uil uil-pen"></i>
                <h5>Add Category</h5></a
              >
            </li>

            <li>
              <a href="manage-categories.php"
                ><i class="uil uil-pen"></i>
                <h5>Manage Catergories</h5></a
              >
            </li>
            <?php endif ?>
          </ul>
        </aside>
        <main>
          <h2>Manage Users</h2>
          <table>
            <thead>
              <tr>
                <th>Name</th>
                <th>Username</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Admin</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Agu Innocent</td>
                <td>Preacher</td>
                <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                <td>
                  <a href="delete-category.php" class="btn sm danger"
                    >Delete</a
                  >
                </td>
                <td>Yes</td>
              </tr>

              <tr>
                <td>Ekene Samuel</td>
                <td>softBoy</td>
                <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                <td>
                  <a href="delete-category.php" class="btn sm danger"
                    >Delete</a
                  >
                </td>
                <td>Yes</td>
              </tr>

              <tr>
                <td>Titi Jones</td>
                <td>cybarian</td>
                <td><a href="edit-user.php" class="btn sm">Edit</a></td>
                <td>
                  <a href="delete-category.php" class="btn sm danger"
                    >Delete</a
                  >
                </td>
                <td>No</td>
              </tr>
            </tbody>
          </table>
        </main>
      </div>
    </section>

    <?php
include '../partials/footer.php'
    ?>

    <script src="main.js"></script>
  </body>
</html>
