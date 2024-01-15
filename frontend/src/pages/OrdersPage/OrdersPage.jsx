import {useState, useEffect} from 'react';
import OrderList from '../../components/Lists/OrderList';
import {GetOrders} from '../../apis/ajax';

function OrdersPage() {
	const [orders, setOrders] = useState([]);

	useEffect(() => {
		GetOrders().then(results => {
			setOrders(Object.values(results));
		});
	}, []);

	return (
		<div
			style={{
				width: '100%',
				display: 'flex',
				flexDirection: 'column',
				justifyContent: 'center',
				alignItems: 'center',
			}}
		>
			<h2>All Orders</h2>

			<OrderList orders={orders} />
		</div>
	);
}

export default OrdersPage;
