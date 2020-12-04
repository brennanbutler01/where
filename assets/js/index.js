let colorArray = ['#AEB3EC', '#B4CEEE', '#7C9768', '#F0E96E', '#E4542E'];
let titleSpans = document.getElementsByTagName('span');
titleSpans = Array.from(titleSpans);
if (!location.href.includes('landing')) { 
	titleSpans.shift();
}
// title color change
const setTitleColor = (i) => {
	
	if (i < 6) {
		setTimeout(() => {
			titleSpans[i].style.color = colorArray[i];
			setTitleColor(i + 1);
		}, 250);
	}
	if (i === 6) {
		let hiddenNavLinks = document.querySelectorAll('.hidden');
		hiddenNavLinks = Array.from(hiddenNavLinks);
		hiddenNavLinks.forEach((hiddenLink) => {
			hiddenLink.classList.remove('hidden');
			hiddenLink.classList.add('visible');
		});
		sessionStorage.setItem('hasRendered', 'true');
	}
};

let hasRendered = sessionStorage.getItem('hasRendered');

if (hasRendered !== 'true') {
	setTimeout(() => {
		window.addEventListener('DOMContentLoaded', setTitleColor(0));
	}, 250);
} else {
	let hiddenNavLinks = document.querySelectorAll('.hidden');
	hiddenNavLinks = Array.from(hiddenNavLinks);
	hiddenNavLinks.forEach((hiddenLink) => {
		hiddenLink.classList.remove('hidden');
	});
	let i = 0;
	titleSpans.forEach(span => {
		span.style.color = colorArray[i];
		i++;
	})
}
//bolded links when active

const activePageBold = (activePage) => {
	const activePageLinks = document.querySelectorAll(
		`a[href='${activePage}.html']`
	);
	activePageLinks.forEach((element) => {
		element.style.fontWeight = 'bold';
	});
};

(() => {
	const currentPage = location.href;
	if (currentPage.includes('shop')) {
		activePageBold('shop');
	} else if (currentPage.includes('eat')) {
		activePageBold('eat');
	} else if (currentPage.includes('artist')) {
		activePageBold('artist');
	} else if (currentPage.includes('about')) {
		activePageBold('about');
	} else if (currentPage.includes('contact')) {
		activePageBold('contact');
	} else if (currentPage.includes('terms')) {
		activePageBold('terms');
	} else if (currentPage.includes('privacy')) {
		activePageBold('privacy');
	} else if (currentPage.includes('houserules')) {
		activePageBold('houserules');
	} else if (currentPage.includes('faq')) {
		activePageBold('faq');
	} else if (currentPage.includes('account')) {
		activePageBold('account');
	}
	else if (currentPage.includes('community')) {
		activePageBold('community');
	}
	else if (currentPage.includes('archives') || (currentPage.includes('Art'))
		|| (currentPage.includes('Event')) || (currentPage.includes('Retail')) ||
	(currentPage.includes('art')) || (currentPage.includes('events')) || (currentPage.includes('retail'))) {
		activePageBold('archives');
	}
})();

//media query for contact page - modify html text to make the
// email legible on mobile
const contactMediaQuery = (query) => {
	if (query.matches) {
		const emailText = document.getElementById('emailcontact');
		emailText.innerHTML = `
		HELLO@THEWHERE
		HOUSE.COM`;
	}
};

const query = window.matchMedia('(max-width:750px)');
if (location.href.includes('contact')) {
	contactMediaQuery(query);
	query.addListener(contactMediaQuery);
}

//menu open/close
const openNav = () => {
	document.getElementById('mySidenav').style.width = '100px';
	document.getElementById('main').style.marginLeft = '100px';
	document.querySelector('i').style.display = 'none';
		setTimeout(() => {
			window.addEventListener('click', closeNav);
		}, 300);
};

const closeNav = () => {
	window.removeEventListener('click', closeNav);
	document.getElementById('mySidenav').style.width = '0';
	document.getElementById('main').style.marginLeft = '0';
	document.querySelector('i').style.display = 'inline-block';
};
const menuIcon = document.getElementById('menuIcon');
if (!location.href.includes('landing')) {
	menuIcon.addEventListener('click', openNav);
}