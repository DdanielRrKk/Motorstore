import style from './style.module.css';

function TrailerItem({product}) {
	return (
		<div className={style.container}>
			<p>{product.brand}</p>
			<p>{product.model}</p>
			<p>{product.engineCapacity}</p>
			<p>{product.color}</p>
			<p>{product.loadCapacity}</p>
			<p>{product.numberOfAxles}</p>
		</div>
	);
}

export default TrailerItem;
