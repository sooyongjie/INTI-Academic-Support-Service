const toggleTheme = () => {
	let theme = localStorage.getItem('theme');
	if (theme == 'light') {
		localStorage.setItem('theme', 'dark');
		changeTheme('dark');
	} else {
		localStorage.setItem('theme', 'light');
		changeTheme('light');
	}
};

const changeTheme = (mode) => {
	if (mode == 'dark') {
		document.body.classList.toggle('dark');
		document.querySelector('.inti-logo').src = '../img/inti-logo-dark.png';
		localStorage.setItem('theme', 'dark');
	} else {
		document.querySelector('.inti-logo').src = '../img/inti-logo.png';
		document.body.classList.toggle('dark');
		localStorage.setItem('theme', 'light');
	}
};

const checkPrefferedTheme = () => {
	let theme = localStorage.getItem('theme');
	console.log('theme: ', theme);
	if (theme == 'dark') {
		changeTheme('dark');
	}
};

window.addEventListener('load', function() {
	document.querySelector('.loading-screen').style.opacity = 0;
	setTimeout(() => {
		document.querySelector('.loading-screen').remove();
	}, 400);
	if (!localStorage.getItem('theme')) {
		if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
			toggleTheme();
		}
	} else {
		checkPrefferedTheme();
	}
});

window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (e) => {
	const newColorScheme = e.matches ? 'dark' : 'light';
	console.log('newColorScheme: ', newColorScheme);
});
