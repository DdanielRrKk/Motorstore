import style from './style.module.css';

function TruckItem({product}) {
	return (
		<div className={style.container}>
			<p>Truck</p>
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
				<p>
					<span>Number of Beds:</span> {product.numberOfBeds}
				</p>
			</div>
		</div>
	);
}

export default TruckItem;
