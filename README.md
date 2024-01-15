# Motorstore 
## React + PHP + MySQL website

The project uses 3 tables in the "motorstore" database: 
- "Products", to store the products that can be ordered;
- "Orders", to store the order information;
- "OrdersProducts", to store the selected products for one order.

The communication between the database and the UI is passed using PHP APIs.
There are 3 types of APIs in the backend:
- "get-orders", to retreave all the orders;
- "get-products", to retreave all the products;
- "add-order", to save the newly created order with the selected products.

The UI has two pages, one for showing all orders and one for making an order.
When making an order, the user has to write the number of the order and his name, and select which products he wants to order.
To select a product, the user has to click on the item, then the item will be stored under the form where he wrote the order number and name.
To remove a product, the user has to click on the item under the form.