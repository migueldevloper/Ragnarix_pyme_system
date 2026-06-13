document.addEventListener('DOMContentLoaded', () => {
    const actionItems = document.querySelectorAll('.navbar-icon[data-action]');
    const profileSection = document.getElementById('profileSection');
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');
    let sidebarCollapsed = false;

    function closeAllPanels() {
        document.querySelectorAll('.navbar-icon.active, .profile-section.active').forEach((node) => {
            node.classList.remove('active');
        });
    }

    actionItems.forEach((item) => {
        item.addEventListener('click', (event) => {
            event.stopPropagation();
            const isActive = item.classList.contains('active');
            closeAllPanels();
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });

    if (profileSection) {
        profileSection.addEventListener('click', (event) => {
            event.stopPropagation();
            const isActive = profileSection.classList.contains('active');
            closeAllPanels();
            if (!isActive) {
                profileSection.classList.add('active');
            }
        });
    }

    document.addEventListener('click', (event) => {
        if (!event.target.closest('.navbar-icon') && !event.target.closest('.profile-section')) {
            closeAllPanels();
        }
    });

    if (sidebarToggle && sidebar && mainContent) {
        sidebarToggle.addEventListener('click', () => {
            sidebarCollapsed = !sidebarCollapsed;
            sidebar.classList.toggle('collapsed', sidebarCollapsed);
            mainContent.classList.toggle('expanded', sidebarCollapsed);
            sidebarToggle.style.left = sidebarCollapsed ? '106px' : '24px';
        });
    }

    if (window.lucide && typeof window.lucide.createIcons === 'function') {
        window.lucide.createIcons();
    }
});
