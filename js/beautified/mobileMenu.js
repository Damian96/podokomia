var mobileMenu,
	toggleMobileMenu = function() {

	mobileMenu.addEventListener('animationend', onMobileMenuAnimationEndHandler, { once: true });
	mobileMenu.addEventListener('webkitAnimationEnd', onMobileMenuAnimationEndHandler, { once: true });
	mobileMenu.addEventListener('msAnimationEnd', onMobileMenuAnimationEndHandler, { once: true });
	mobileMenu.addEventListener('oAnimationEnd', onMobileMenuAnimationEndHandler, { once: true });

	if(mobileMenu.classList.contains('hidden')) {

		mobileMenu.classList.remove('hidden');
		mobileMenu.classList.add('slide-in');

	} else {

		mobileMenu.classList.add('slide-out');

	}

	},
	onMobileMenuAnimationEndHandler = function() {

		if(this.classList.contains('slide-in')) {
			this.classList.remove('slide-in');
		}
		if(this.classList.contains('slide-out')) {
			this.classList.add('hidden');
			this.classList.remove('slide-out');
		}
		return true;

	};

document.addEventListener('DOMContentLoaded', function() {

	var switcher = document.getElementById('mobile-menu-switcher');
	mobileMenu = document.getElementById('mobile-main-menu');

	switcher.addEventListener('click', toggleMobileMenu);

});