// app.js
document.addEventListener('DOMContentLoaded', () => {
    const app = document.getElementById('app');

    // Define your "routes" and the corresponding content
    const routes = {
        '/SPA/public/spa-home': '<h1>Welcome to the SPA Home Page</h1>',
        '/SPA/public/spa-about': '<h1>About Us</h1>',
        '/SPA/public/spa-contact': '<h1>Contact Us</h1>'
    };

    // Function to navigate to a new "route"
    function navigate(path) {
        window.history.pushState({}, path, window.location.origin + path);
        app.innerHTML = routes[path];
    }

    // Attach click event listeners to all internal links
    document.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const path = e.target.getAttribute('href');
            navigate(path);
        });
    });

    // Listen to the popstate event for browser navigation
    window.addEventListener('popstate', () => {
        app.innerHTML = routes[window.location.pathname];
    });

    // Initialize the SPA by navigating to the current path
    navigate(window.location.pathname);
});

//Force a full page reload when clicking on a link that has a mpa-link class to load the content of MPA page.
document.addEventListener('DOMContentLoaded', () => {
    // Select all links that should lead to an MPA route
    const mpaLinks = document.querySelectorAll('a.mpa-link');

    mpaLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault(); // Prevent the default SPA navigation behavior
            window.location.href = e.target.href; // Navigate to the MPA URL
        });
    });
});
