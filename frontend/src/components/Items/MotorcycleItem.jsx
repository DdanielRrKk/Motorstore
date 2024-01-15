import style from './style.module.css';

function MotocycleItem({product}) {
	return (
		<div className={style.container}>
			<p>Motorcycle</p>
			<div>
				<p>
					<span>Brand:</span> {product.brand}
				</p>
				<p>
					<span>Model:</span> {product.model}
				</p>
				<p>
					<span>Engine Capacity:</span> {product.engineCapacity}
				</p>
				<p>
					<span>Colour:</span> {product.colour}
				</p>
			</div>
		</div>
	);
}

export default MotocycleItem;
