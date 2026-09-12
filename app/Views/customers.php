<h1>Customer Accounts</h1>

<nav>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/customers">Customers</a>
    <a href="/users">Users</a>
</nav>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

    <?php foreach ($customers as $customer): ?>
    <tr>
        <td><?= $customer['name'] ?></td>
        <td><?= $customer['email'] ?></td>
        <td><?= $customer['phone'] ?></td>
    </tr>
    <?php endforeach ?>
</table>