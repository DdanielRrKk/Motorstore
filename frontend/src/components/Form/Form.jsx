import style from './style.module.css';

function Form({submitHandler, orderedProducts = [], removeHandler}) {
	function handleSubmit(e) {
		e.preventDefault();
		submitHandler(e.target[0].value, e.target[1].value);

		e.target[0].value = '';
		e.target[1].value = '';
	}

	return (
		<form
			onSubmit={handleSubmit}
			className={style.form}
		>
			<h3>Make Order</h3>

			<label>
				Order Number:{' '}
				<input
					type='text'
					placeholder='ORD001'
				/>
			</label>

			<label>
				Clinet Name:{' '}
				<input
					type='text'
					placeholder='John Doe'
				/>
			</label>

			<label> Products: </label>
			{orderedProducts.map((product, index) => (
				<label
					key={index}
					style={{
						color: 'white',
						fontWeight: '100',
						cursor: 'pointer',
					}}
					onClick={() => removeHandler(product.id)}
				>
					{product.brand} - {product.model}{' '}
					{product.quantity > 1 ? `(${product.quantity})` : ''}
				</label>
			))}

			<input
				type='submit'
				value={'Add Order'}
			/>
		</form>
	);
}

export default Form;
