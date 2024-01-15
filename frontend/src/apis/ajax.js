const API_URL = 'http://localhost/motorstore/backend/apis';

export async function GetProducts() {
	return new Promise((resolve, reject) => {
		try {
			fetch(`${API_URL}/get-products.php`)
				.then(res => res.json())
				.then(data => resolve(data))
				.catch(err => reject(err));
		} catch (err) {
			reject(err);
		}
	});
}

export async function GetOrders() {
	return new Promise((resolve, reject) => {
		try {
			fetch(`${API_URL}/get-orders.php`)
				.then(res => res.json())
				.then(data => resolve(data))
				.catch(err => reject(err));
		} catch (err) {
			reject(err);
		}
	});
}

export async function AddOrder(order) {
	return new Promise((resolve, reject) => {
		try {
			fetch(`${API_URL}/add-order.php`, {
				method: 'POST',
				headers: {'Content-Type': 'application/json'},
				body: JSON.stringify(order),
			})
				.then(res => {
					if (!res.ok) {
						console.error(`HTTP error! Status: ${res.status}`);
					}
					resolve(res.status);
				})
				.catch(err => reject(err));
		} catch (err) {
			reject(err);
		}
	});
}
