import MotorcycleItem from '../Items/MotorcycleItem';
import CarItem from '../Items/CarItem';
import TruckItem from '../Items/TruckItem';
import TrailerItem from '../Items/TrailerItem';

function ProductList({products}) {
	return (
		<div>
			{products.map(product => {
				switch (product.productType) {
					case 1:
						return (
							<MotorcycleItem
								key={product.id}
								product={product}
							/>
						);
					case 2:
						return (
							<CarItem
								key={product.id}
								product={product}
							/>
						);
					case 3:
						return (
							<TruckItem
								key={product.id}
								product={product}
							/>
						);
					case 4:
						return (
							<TrailerItem
								key={product.id}
								product={product}
							/>
						);
					default:
						return null;
				}
			})}
		</div>
	);
}

export default ProductList;
