import style from './style.module.css';

function OrderItem({order}) {
	return (
		<div className={style.orderItem}>
			<p>
				<span>Order Number:</span>
				<span>{order.orderNumber}</span>
			</p>
			<p>
				<span>Clinet Name:</span>
				<span>{order.clientName}</span>
			</p>
			<p>
				<span>Products:</span>
				<span>{order.products.length}</span>
			</p>
		</div>
	);
}

export default OrderItem;
