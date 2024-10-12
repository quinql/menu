<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MenuScanOrder - Manage Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
                            <a class="nav-link" href="staffman">User Management</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="menuman">Menu Management</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="orderman">Order Management</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>

        <div class="container py-5">
            <h2>Manage Menu Items</h2>

            <div class="mb-3">
                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addMenuItemModal">Add New Item</button>
            </div>

            <!-- add menu item model -->
            <div class="modal fade" id="addMenuItemModal" tabindex="-1" aria-labelledby="addMenuItemModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addMenuItemModalLabel">Add New Menu Item</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="<?= base_url('add_item/confirm' ) ?>">
                                <div class="mb-3">
                                        <label for="itemID" class="form-label">Item ID</label>
                                        <input type="number" class="form-control" id="ItemID" name="ItemID" required>
                                </div>
                                <div class="mb-3">
                                    <label for="itemName" class="form-label">Item Name</label>
                                    <input type="text" class="form-control" id="Name" name="Name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="itemPrice" class="form-label">Item Price ($)</label>
                                    <input type="number" class="form-control" id="Price" name="Price" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Item</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-striped mt-4">
                <thead>
                    <tr>
                        <th scope="col">ItemID</th>
                        <th scope="col">Item Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($menuman as $item): ?>
                        <tr>
                            <td><?= esc($item['ItemID']) ?></td>
                            <td><?= esc($item['Name']) ?></td>
                            <td><?= esc($item['Price']) ?></td>
                            <td>
                                <a href="<?= site_url('edit_item/' . esc($item['ItemID'])) ?>" data-bs-toggle="modal" data-bs-target="#editItemModal<?= $item['ItemID'] ?>" type="button" class="btn btn-sm btn-info me-2">Edit</a>
                                <a href="<?= site_url('delete_item/' . esc($item['ItemID'])) ?>"   class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?')"><i class="bi bi-dash-circle-fill"></i>Delete</a>
                                
                                <!-- edit item model -->
                                <div class="modal fade" id="editItemModal<?= $item['ItemID']?>" tabindex="-1" aria-labelledby="editItemModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editUserModalLabel">Edit Item</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="<?= site_url('edit_item/confirm/' . esc($item['ItemID'])); ?>">
                                                    <div class="mb-3">
                                                        <label for="ItemID" class="form-label">ItemID</label>
                                                        <input type="number" class="form-control" id="ItemID" name="ItemID" required value="<?= $item['ItemID'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="Name" class="form-label">Name</label>
                                                        <input type="text" class="form-control" id="Name" name="Name" required value="<?= ($item['Name']) ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="Price" class="form-label">Price</label>
                                                        <input type="text" class="form-control" id="Price" name="Price" required value="<?= ($item['Price']) ?>">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function removeRow(button) {
            var row = button.parentNode.parentNode;
            row.parentNode.removeChild(row);
        }
    </script>
</body>
</html>
