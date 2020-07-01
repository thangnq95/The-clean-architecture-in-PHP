<body>
<?php $results = mysql_query(
    'SELECT * FROM customers ORDER BY name'
); ?>
<h2>Customers</h2>
<ul>
    <?php while ($customer = mysql_fetch_assoc($results)): ?>
        <li><?= $customer['name'] ?></li>
    <?php endwhile; ?>
</ul>
</body>