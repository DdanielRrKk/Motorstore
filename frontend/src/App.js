import Layout from './pages/Layout/Layout';
import OrdersPage from './pages/OrdersPage/OrdersPage';
import OrdersFormPage from './pages/OrdersForm/OrdersForm';

import {Routes, Route} from 'react-router-dom';

function App() {
	return (
		<Routes>
			<Route
				path='/'
				element={<Layout />}
			>
				<Route
					path='/'
					element={<OrdersPage />}
				/>
				<Route
					path='/form'
					element={<OrdersFormPage />}
				/>
			</Route>
		</Routes>
	);
}

export default App;
