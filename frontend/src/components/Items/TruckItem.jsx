import style from './style.module.css';

function TruckItem({product}) {
	return (
		<div className={style.container}>
			<p>{product.brand}</p>
			<p>{product.model}</p>
			<p>{product.engineCapacity}</p>
			<p>{product.color}</p>
			<p>{product.numberOfBeds}</p>
		</div>
	);
}

export default TruckItem;
