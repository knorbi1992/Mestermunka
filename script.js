document.addEventListener('DOMContentLoaded', (event) => 
    {
    const userNameElement = document.getElementById('user-name');
    const logoutLink = document.getElementById('logout-link');
    const loginLink = document.getElementById('login-link');
    const welcomeMessage = document.getElementById('welcome-message');

    if (loggedIn == true) 
        {
        welcomeMessage.style.display = 'block';
        logoutLink.style.display = 'inline';
        if (loginLink) 
            {
            loginLink.style.display = 'none';
            }
        } 
    else 
        {
        welcomeMessage.style.display = 'none';
        logoutLink.style.display = 'none';
        if (loginLink) 
            {
            loginLink.style.display = 'inline';
            }
        }
});