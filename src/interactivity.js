import { store, getContext } from '@wordpress/interactivity';

const windwpStore = store('windwp', {
    state: {
        isMenuOpen: false,
        isCartOpen: false,
        isDarkMode: false,
        activeFaq: null,
        get canScroll() {
            const { isMenuOpen, isCartOpen } = windwpStore.state;
            return !isMenuOpen && !isCartOpen;
        }
    },
    actions: {
        initDarkMode: () => {
            const { state } = windwpStore;
            state.isDarkMode = localStorage.getItem('darkMode') === 'true' || 
                (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches);
            if (state.isDarkMode) {
                document.documentElement.classList.add('dark');
            }
        },
        toggleDarkMode: () => {
            const { state } = windwpStore;
            state.isDarkMode = !state.isDarkMode;
            localStorage.setItem('darkMode', state.isDarkMode);
            document.documentElement.classList.toggle('dark', state.isDarkMode);
        },
        toggleMenu: () => {
            const { state } = windwpStore;
            state.isMenuOpen = !state.isMenuOpen;
            console.log('WindWP: Menu Toggle ->', state.isMenuOpen);
            
            // Force scroll update if needed (backup for effect)
            if (state.isMenuOpen) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        },
        toggleCart: () => {
            const { state } = windwpStore;
            state.isCartOpen = !state.isCartOpen;
        },
        toggleFaq: () => {
            const { state } = windwpStore;
            const context = getContext();
            state.activeFaq = state.activeFaq === context.id ? null : context.id;
        },
    },
    effects: {
        onInit: () => {
            console.log('WindWP Interactivity Runtime Initialized');
            windwpStore.actions.initDarkMode();
        },
        toggleScroll: () => {
            const { state } = windwpStore;
            // This effect handles body scroll locking
            if (state.isMenuOpen || state.isCartOpen) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        },
    },
});

export default windwpStore;
