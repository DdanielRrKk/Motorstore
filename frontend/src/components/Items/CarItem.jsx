import style from './style.module.css';

function CarItem({product}) {
	return (
		<div className={style.container}>
			<p>Car</p>
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
					<span>Number of Doors:</span> {product.numberOfDoors}
				</p>
				<p>
					<span>Car Category:</span> {product.carCategory}
				</p>
			</div>
		</div>
	);
}

export default CarItem;
