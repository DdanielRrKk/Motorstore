import {Outlet, NavLink} from 'react-router-dom';
import styles from './style.module.css';

function Layout() {
	return (
		<div>
			<header>
				<nav className={styles.navbar}>
					<ul>
						<li>
							<NavLink to='/'>All Orders</NavLink>
						</li>
						<li>
							<NavLink to='/form'>Make Order</NavLink>
						</li>
					</ul>
				</nav>
			</header>

			<main>
				<Outlet />
			</main>
		</div>
	);
}

export default Layout;
