<?php

use Carbon\Carbon;

return [
    'tabs' => [
        ['name' => 'All Invoice', 'value' => 'all'],
        ['name' => 'Draft', 'value' => 'draft'],
        ['name' => 'Outstanding', 'value' => 'outstanding'],
        ['name' => 'Past Due', 'value' => 'past_due'],
        ['name' => 'Paid', 'value' => 'paid'],
    ],

    'invoices' => [
        ['id' => '1', 'amount' => '10.00', 'invoice_number' => '8FB2578-001', 'customer_email' => 'jhon@example.com', 'status' => 'draft', 'created_date' => Carbon::now()->subDays(1)],
        ['id' => '2', 'amount' => '8.00', 'invoice_number' => '8FB2578-005', 'customer_email' => 'peter@example.com', 'status' => 'paid', 'created_date' => Carbon::now()->subDays(5)],
        ['id' => '3', 'amount' => '12.00', 'invoice_number' => '8FB2578-006', 'customer_email' => 'robert@example.com', 'status' => 'outstanding', 'created_date' => Carbon::now()->subDays(10)],
        ['id' => '4', 'amount' => '20.00', 'invoice_number' => '8FB2578-010', 'customer_email' => 'max@example.com', 'status' => 'past_due', 'created_date' => Carbon::now()->subDays(7)],
        ['id' => '5', 'amount' => '5.00', 'invoice_number' => '8FB2578-011', 'customer_email' => 'natasha@example.com', 'status' => 'draft', 'created_date' => Carbon::now()->subDays(2)],
        ['id' => '6', 'amount' => '14.00', 'invoice_number' => '8FB2578-015', 'customer_email' => 'chrish@example.com', 'status' => 'paid', 'created_date' => Carbon::now()->subDays(5)],
        ['id' => '7', 'amount' => '22.00', 'invoice_number' => '8FB2578-016', 'customer_email' => 'stephen@example.com', 'status' => 'paid', 'created_date' => Carbon::now()->subDays(8)],
        ['id' => '8', 'amount' => '7.00', 'invoice_number' => '8FB2578-018', 'customer_email' => 'phoenix@example.com', 'status' => 'outstanding', 'created_date' => Carbon::now()->subDays(9)],
        ['id' => '9', 'amount' => '12.00', 'invoice_number' => '8FB2578-020', 'customer_email' => 'emily@example.com', 'status' => 'past_due', 'created_date' => Carbon::now()->subDays(12)],
        ['id' => '10', 'amount' => '15.00', 'invoice_number' => '8FB2578-024', 'customer_email' => 'michel@example.com', 'status' => 'paid', 'created_date' => Carbon::now()->subDays(13)],
        ['id' => '11', 'amount' => '21.00', 'invoice_number' => '8FB2578-025', 'customer_email' => 'robin@example.com', 'status' => 'paid', 'created_date' => Carbon::now()->subDays(7)],
        ['id' => '12', 'amount' => '8.00', 'invoice_number' => '8FB2578-029', 'customer_email' => 'luffy@example.com', 'status' => 'paid', 'created_date' => Carbon::now()->subDays(2)],
        ['id' => '13', 'amount' => '10.00', 'invoice_number' => '8FB2578-034', 'customer_email' => 'jim@example.com', 'status' => 'draft', 'created_date' => Carbon::now()->subDays(3)],
        ['id' => '14', 'amount' => '16.00', 'invoice_number' => '8FB2578-035', 'customer_email' => 'bruce@example.com', 'status' => 'outstanding', 'created_date' => Carbon::now()->subDays(8)],
        ['id' => '15', 'amount' => '25.00', 'invoice_number' => '8FB2578-039', 'customer_email' => 'henry@example.com', 'status' => 'past_due', 'created_date' => Carbon::now()->subDays(15)],
        ['id' => '16', 'amount' => '30.00', 'invoice_number' => '8FB2578-040', 'customer_email' => 'zoro@example.com', 'status' => 'paid', 'created_date' => Carbon::now()->subDays(18)],
        ['id' => '17', 'amount' => '6.00', 'invoice_number' => '8FB2578-042', 'customer_email' => 'martin@example.com', 'status' => 'draft', 'created_date' => Carbon::now()->subDays(20)],
    ]
];