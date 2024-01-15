import style from './style.module.css';

function TrailerItem({product}) {
	return (
		<div className={style.container}>
			<p>Trailer</p>
			<div>
				<p>
					<span>Brand:</span> {product.brand}
				</p>
				<p>
					<span>Model:</span> {product.model}
				</p>
				<p>
					<span>Load Capaxity:</span> {product.loadCapacity}
				</p>
				<p>
					<span>Number of Axles:</span> {product.numberOfAxles}
				</p>
			</div>
		</div>
	);
}

export default TrailerItem;
