<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MenuScanOrder - Admin User Management</title>
    <!-- This is the main stylesheet for Bootstrap. It includes all the CSS necessary for Bootstrap's components and utilities to work. -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Include Bootstrap Icons -->
    <!-- This link imports the Bootstrap Icons library, which provides a wide range of SVG icons for use in your projects. -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container">
              <a class="navbar-brand" href="home">MenuScanOrder</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                          <a class="nav-link" href="home">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link  active" href="staffman">User Management</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link " href="menuman">Menu Management</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link " href="orderman">Order Management</a>
                        </li>
                      <li class="nav-item">
                        <a class="nav-link" href="home">Logout</a>
                      </li>
                  </ul>
              </div>
          </div>
      </nav>
  </header>

  <main>
    <section class="py-5">
        <div class="container">
                <div >
                    <h2>Management Users </h2>
                </div>

                <div class="mb-3">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">Add New User</button>
                </div>

                <!-- add user model -->
                <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                            <div class="modal-body">
                                <form  method="post" action="<?= site_url('add_user/confirm'); ?>">
                                <div class="mb-3">
                                    <label for="userID" class="form-label">UserID</label>
                                    <input type="number" class="form-control" id="userid" name="UserID" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">password</label>
                                    <input type="text" class="form-control" id="password" name="Password" required>
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" name="UserName" required>
                                </div>
                                <div class="mb-3">
                                    <label for="role" class="form-label">Role</label>
                                    <select class="form-control" id="role" name="Role">
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                    <option value="Staff">Staff</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Add User</button>
                                </div>
                                </form>
                            </div>
                        </div>
            </div>
        </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>UserID</th>
                        <th>Password</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                
                <tbody>
                    <?php foreach ($staffman as $user): ?>
                        <tr>
                            <td><?= esc($user['UserID']) ?></td>
                            <td><?= esc($user['Password']) ?></td>
                            <td><?= esc($user['UserName']) ?></td>
                            <td><?= esc($user['Role']) ?></td>
                            <td>
                                <a href="<?= site_url('edit_user/' . esc($user['UserID'])) ?>" data-bs-toggle="modal" data-bs-target="#editUserModal<?= $user['UserID'] ?>" type="button" class="btn btn-sm btn-info me-2">Edit</a>
                                <a href="<?= site_url('delete_user/' . esc($user['UserID'])) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this user?')"><i class="bi bi-dash-circle-fill">Remove</i></a>
                                
                                 <!-- edit user model -->
                                <div class="modal fade" id="editUserModal<?= $user['UserID'] ?>" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="<?= site_url('edit_user/confirm/' . esc($user['UserID'])); ?>">
                                                    <div class="mb-3">
                                                        <label for="userID" class="form-label">UserID</label>
                                                        <input type="number" class="form-control" id="userid" name="UserID" required value="<?= $user['UserID'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="password" class="form-label">Password</label>
                                                        <input type="text" class="form-control" id="password" name="Password" required value="<?= $user['Password'] ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="username" class="form-label">Username</label>
                                                        <input type="text" class="form-control" id="username" name="UserName" required value="<?= $user['UserName'] ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="role" class="form-label">Role</label>
                                                        <select class="form-control" id="role" name="Role">
                                                            <option value="Admin" <?= $user['Role'] == 'Admin' ? 'selected' : '' ?>>Admin</option>
                                                            <option value="User" <?= $user['Role'] == 'User' ? 'selected' : '' ?>>User</option>
                                                            <option value="Staff" <?= $user['Role'] == 'Staff' ? 'selected' : '' ?>>Staff</option>
                                                        </select>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </section>
  </main>

  <footer class="bg-dark text-light py-4">
      <div class="container">
          <div class="row">
              <div class="col-md-6">
                  <p>&copy; 2024 MenuScanOrder</p>
              </div>
              <div class="col-md-6 text-md-end">
                  <a href="#" class="text-light me-3">Privacy Policy</a>
                  <a href="#" class="text-light">Terms of Service</a>
              </div>
          </div>
      </div>
  </footer>
    <!-- This script includes all of Bootstrap's JavaScript-based components and behaviors, such as modal windows, dropdowns, and tooltips.  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function removeRow(button) {
            var row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>
  </body>
</html>