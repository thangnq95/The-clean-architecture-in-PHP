<?php

class CustomersController
{
    public function usersAction()
    {
        $repository = new CustomersRepository();
        $customers = $repository->getAll();
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