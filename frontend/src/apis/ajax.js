const API_URL = 'http://localhost/motorstore/backend/api';

export async function GetProducts() {
	return new Promise((resolve, reject) => {
		try {
			return fetch(`${API_URL}/get-products.php`)
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
			return fetch(`${API_URL}/get-orders.php`)
				.then(res => res.json())
				.then(data => resolve(data))
				.catch(err => reject(err));
		} catch (err) {
			reject(err);
		}
	});
}
