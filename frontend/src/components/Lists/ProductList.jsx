import MotorcycleItem from '../Items/MotorcycleItem';
import CarItem from '../Items/CarItem';
import TruckItem from '../Items/TruckItem';
import TrailerItem from '../Items/TrailerItem';

import ClickableItem from '../Items/ClickableItem';

function ProductList({products = [], addHandler}) {
	return (
		<div
			style={{
				maxWidth: '500px',
				width: '100%',
				display: 'flex',
				flexDirection: 'column',
				justifyContent: 'center',
				gap: '20px',
			}}
		>
			{products.map(product => {
				switch (product.productType) {
					case 1:
						return (
							<ClickableItem
								key={product.id}
								onClick={() => addHandler(product)}
							>
								<MotorcycleItem product={product} />
							</ClickableItem>
						);
					case 2:
						return (
							<ClickableItem
								key={product.id}
								onClick={() => addHandler(product)}
							>
								<CarItem product={product} />
							</ClickableItem>
						);
					case 3:
						return (
							<ClickableItem
								key={product.id}
								onClick={() => addHandler(product)}
							>
								<TruckItem product={product} />
							</ClickableItem>
						);
					case 4:
						return (
							<ClickableItem
								key={product.id}
								onClick={() => addHandler(product)}
							>
								<TrailerItem product={product} />
							</ClickableItem>
						);
					default:
						return null;
				}
			})}
		</div>
	);
}

export default ProductList;
