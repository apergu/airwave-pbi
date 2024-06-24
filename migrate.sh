#!/bin/bash

s=("accounting_cogs" "accounting_detail_list_wip_by_account" "accounting_detail_list_wip" "bill_payment" "cheque" "customer_payments" "expense_report" "finance_bill_payment" "finance_bill_detail" "finance_customer_payments" "finance_invoice_ar" "finance_invoice_ar_detail" "finance_payment_request_detail" "finance_project_expense_report_detail_list" "finance_project_expense_report_detail" "finance_vendor_bill_detail_list" "finance_vendor_prepayment_detail_list" "finance_write_cheque_detail_list" "inventory_adj_finance_accounting" "invoice_sales_order" "item_fulfillment" "item_receipt_material_service" "item_receipt_accounting" "item_receipt" "journal_entry" "logistic_detail_material_stock" "logistic_detail_serial_lot_material_stock" "master_item" "payment_request_custom" "payment_request" "prepayment_v2" "procurement_detail_list_po" "procurement_purchase_contract_detail" "project_id" "project_material_req_detail" "purchase_order" "purchase_request_detail" "purchase_request" "sales_budget" "sales_detail_list_sb" "sales_detail_list_so" "sales_opportunity" "sales_order" "vendor_bill")
for n in ${s[@]};
do
    echo "Migrating $n"
    # python3 migrate.py $n
    php artisan make:migration create_${n}_table
    echo "Done $n"
done
