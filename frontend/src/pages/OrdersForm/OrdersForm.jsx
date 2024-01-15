import {useState, useEffect} from 'react';

import {GetProducts, AddOrder} from '../../apis/ajax';

import ProductList from '../../components/Lists/ProductList';
import Form from '../../components/Form/Form';

function OrdersFormPage() {
	const [products, setProducts] = useState([]);
	const [orderedProducts, setOrderedProducts] = useState([]);

	function GetDataFromDatabase() {
		GetProducts().then(results => {
			setProducts(results);
		});
	}

	useEffect(() => {
		GetDataFromDatabase();
	}, []);

	function handleFormSubmit(OrderNumber, ClientName) {
		const obj = {OrderNumber, ClientName, OrderedProducts: orderedProducts};

		AddOrder(obj).then(() => {
			GetDataFromDatabase();
			setOrderedProducts([]);
		});
	}

	function handleAddProductToOrder(product) {
		if (orderedProducts.find(p => p.id === product.id)) {
			setOrderedProducts(
				orderedProducts.map(p => {
					if (p.id === product.id) {
						return {
							...p,
							quantity: p.quantity + 1,
						};
					}
					return p;
				})
			);
			return;
		}
		setOrderedProducts([
			...orderedProducts,
			{
				...product,
				quantity: 1,
			},
		]);
	}
	function handleRemoveProductFromOrder(ProductID) {
		const tempArray = orderedProducts.map(p => {
			if (p.id === ProductID) {
				if (p.quantity < 2) {
					return null;
				}

				return {
					...p,
					quantity: p.quantity - 1,
				};
			}
			return p;
		});

		const sanitazedArray = tempArray.filter(p => p !== null);
		setOrderedProducts(sanitazedArray);
	}

	return (
		<div
			style={{
				width: '100%',
				padding: '10px',
				display: 'flex',
				flexDirection: 'column',
				justifyContent: 'center',
				alignItems: 'center',
			}}
		>
			<h2>Make a Order</h2>

			<div
				style={{
					width: '100%',
					display: 'flex',
					flexDirection: 'row',
					justifyContent: 'space-around',
					alignItems: 'start',
				}}
			>
				<Form
					submitHandler={handleFormSubmit}
					orderedProducts={orderedProducts}
					removeHandler={handleRemoveProductFromOrder}
				/>

				<div style={{width: 'auto'}}>
					<h3>List of Products</h3>
					<ProductList
						products={products}
						addHandler={handleAddProductToOrder}
					/>
				</div>
			</div>
		</div>
	);
}

export default OrdersFormPage;
