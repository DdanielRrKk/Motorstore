import style from './style.module.css';

function MotocycleItem({product}) {
	return (
		<div className={style.container}>
			<p>{product.brand}</p>
			<p>{product.model}</p>
			<p>{product.engineCapacity}</p>
			<p>{product.color}</p>
		</div>
	);
}

export default MotocycleItem;
