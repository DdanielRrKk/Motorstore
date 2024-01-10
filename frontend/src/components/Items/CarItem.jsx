import style from './style.module.css';

function CarItem({product}) {
	return (
		<div className={style.container}>
			<p>{product.brand}</p>
			<p>{product.model}</p>
			<p>{product.engineCapacity}</p>
			<p>{product.color}</p>
			<p>{product.numberOfDoors}</p>
			<p>{product.carCategory}</p>
		</div>
	);
}

export default CarItem;
