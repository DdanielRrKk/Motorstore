import {useState, useEffect} from 'react';
import ProductList from '../../components/Lists/ProductList';
import {GetProducts} from '../../api/api';

function OrdersListPage() {
	const [products, setProducts] = useState([]);

	useEffect(() => {
		GetProducts().then(results => {
			setProducts(results);
			console.log(results);
		});
	}, []);

	return (
		<div>
			<h2>Orders</h2>

			<ProductList products={products} />
		</div>
	);
}

export default OrdersListPage;