import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

/**
 * Swiper Carousel — Clients section
 */
document.addEventListener('DOMContentLoaded', () => {
    const swiperEl = document.querySelector('.clients-swiper');
    if (swiperEl) {
        new Swiper('.clients-swiper', {
            loop: true,
            autoplay: {
                delay: 3000,
            },
            slidesPerView: 'auto',
            spaceBetween: 30,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }

    /**
     * Tab Switching Logic
     * Reads ?tab= from URL params, sets active tab on load,
     * handles click on tab buttons.
     */
    const initTabs = () => {
        const tabButtons = document.querySelectorAll('[data-tab]');
        const tabPanels = document.querySelectorAll('.tab-panel');

        if (tabButtons.length === 0) return;

        const urlParams = new URLSearchParams(window.location.search);
        const activeTab = urlParams.get('tab') || tabButtons[0]?.getAttribute('data-tab');

        const activateTab = (tabSlug) => {
            // Update tab buttons
            tabButtons.forEach((btn) => {
                if (btn.getAttribute('data-tab') === tabSlug) {
                    btn.classList.remove('bg-[#F5F5F5]', 'text-gray-600');
                    btn.style.backgroundColor = getComputedStyle(document.documentElement).getPropertyValue('--tabs-active-bg').trim() || '#A21C21';
                    btn.style.color = getComputedStyle(document.documentElement).getPropertyValue('--tabs-active-text').trim() || '#FFFFFF';
                } else {
                    btn.style.backgroundColor = getComputedStyle(document.documentElement).getPropertyValue('--tabs-inactive-bg').trim() || '#F5F5F5';
                    btn.style.color = getComputedStyle(document.documentElement).getPropertyValue('--tabs-inactive-text').trim() || '#4B5563';
                }
            });

            // Show/hide tab content panels
            tabPanels.forEach((panel) => {
                if (panel.id === tabSlug) {
                    panel.classList.remove('hidden');
                } else {
                    panel.classList.add('hidden');
                }
            });
        };

        // Set active tab on load
        if (activeTab) {
            activateTab(activeTab);
        }

        // Handle click on tab buttons
        tabButtons.forEach((btn) => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const tabSlug = btn.getAttribute('data-tab');
                activateTab(tabSlug);
            });
        });
    };

    initTabs();

    /**
     * Hamburger Menu Toggle
     * Toggles #mobile-menu visibility on #menu-toggle click
     */
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    if (menuToggle && mobileMenu) {
        menuToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }
});
