import OrderItem from '../Items/OrderItem';

function OrderList({orders = []}) {
	return (
		<div
			style={{
				maxWidth: '500px',
				width: '100%',
				display: 'flex',
				flexDirection: 'column',
				justifyContent: 'center',
				gap: '20px',
			}}
		>
			{orders.map(order => {
				return (
					<OrderItem
						key={order.orderNumber}
						order={order}
					/>
				);
			})}
		</div>
	);
}

export default OrderList;
