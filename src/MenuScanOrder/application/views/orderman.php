<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MenuScanOrder - View Order</title>
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
                            <a class="nav-link " href="menuman">Menu Management</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="orderman">Order Management</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container py-5">
        <h2>Management Orders</h2>
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th scope="col">Order</th>
                    <th scope="col">Table</th>
                    <th scope="col">Status</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($orderman as $order): ?>
                <tr>
                    <td><?= esc($order['OrderID']) ?></td>
                    <td><?= esc($order['TableID']) ?></td>
                    <td><?= esc($order['Status']) ?></td>
                    <td><?= esc($order['Name']) ?></td>
                    <td><?= esc($order['Price']) ?></td>
                    <td>
                        <a href="<?= site_url('edit_order/' . esc($order['OrderID'])) ?>" data-bs-toggle="modal" data-bs-target="#editOrderModal<?= $order['OrderID'] ?>" type="button" class="btn btn-sm btn-info me-2">Edit</a>

                        <a href="<?= site_url('delete_order/' . esc($order['OrderID'])) ?>"   class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?')"><i class="bi bi-dash-circle-fill"></i>Delete</a>
                        
                        <!-- edit model -->
                        <div class="modal fade" id="editOrderModal<?= $order['OrderID']?>" tabindex="-1" aria-labelledby="editOrderModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editOrderModalLabel">Edit Order</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="<?= site_url('edit_order/confirm/' . esc($order['OrderID'])); ?>">
                                                    <div class="mb-3">
                                                        <label for="ItemID" class="form-label">OrderID</label>
                                                        <input type="number" class="form-control" id="OrderID" name="OrderID" required value="<?= $order['OrderID'] ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="Table" class="form-label">Table</label>
                                                        <select class="form-control" id="Status" name="TableID">
                                                            <option value="1" <?= $order['Status'] == '1' ? 'selected' : '' ?>>1</option>
                                                            <option value="2" <?= $order['Status'] == '2' ? 'selected' : '' ?>>2</option>
                                                            <option value="3" <?= $order['Status'] == '3' ? 'selected' : '' ?>>3</option>
                                                            </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="Status" class="form-label">Status</label>
                                                        <select class="form-control" id="Status" name="Status">
                                                            <option value="Pending" <?= $order['Status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
                                                            <option value="Completed" <?= $order['Status'] == 'Completed' ? 'selected' : '' ?>>Completed</option>
                                                            <option value="Cancelled" <?= $order['Status'] == 'Cancelled' ? 'selected' : '' ?>>Cancelled</option>
                                                            </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="Name" class="form-label">Name</label>
                                                        <input type="text" class="form-control" id="Name" name="Name" required value="<?= ($order['Name']) ?>">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="Price" class="form-label">Price</label>
                                                        <input type="text" class="form-control" id="Price" name="Price" required value="<?= ($order['Price']) ?>">
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
</body>
</html>
