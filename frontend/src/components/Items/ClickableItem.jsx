function ClickableItem({children, onClick}) {
	return (
		<div
			onClick={onClick}
			style={{
				cursor: 'pointer',
				display: 'flex',
				flexDirection: 'row',
				justifyContent: 'space-between',
				alignItems: 'center',
			}}
		>
			{children}
		</div>
	);
}

export default ClickableItem;
