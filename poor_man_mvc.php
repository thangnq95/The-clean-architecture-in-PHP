<?php

class CustomersController
{
    public function indexAction()
    {
        $db = Db::getInstance();
        $customers = $db->fetchAll(
            'SELECT * FROM customers ORDER BY name'
        );
        return [
            'customers' => $customers
        ];
    }
}

?>
<h2>Customers</h2>
<ul>
    <?php foreach ($this->customers as $customer): ?>
        <li><?= $customer['name'] ?></li>
    <?php endforeach; ?>
</ul>