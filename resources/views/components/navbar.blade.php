  <nav class="sidebar d-flex flex-column flex-shrink-0 position-fixed">
    <button class="toggle-btn" onclick="toggleSidebar()">
      <i class="fas fa-chevron-left"></i>
    </button>

    <div class="p-4">
      <h4 class="logo-text fw-bold mb-0">Resolve Aí</h4>
      <p class="text-light small hide-on-collapse">Dashboard</p>
    </div>

    <div class="nav flex-column">
      <a href="{{route('dashboard.findAll')}}" class="sidebar-link active text-decoration-none p-3">
        <i class="fas fa-home me-3"></i>
        <span class="hide-on-collapse">inicio</span>
      </a>
      <a href="{{route('request.findAll')}}" class="sidebar-link text-decoration-none p-3">
        <i class="fas fa-chart-bar me-3"></i>
        <span class="hide-on-collapse">Solicitações</span>
      </a>
      <a href="#" class="sidebar-link text-decoration-none p-3">
        {{-- <i class="fas fa-users me-3"></i> --}}
        <i class="fa-solid fa-person-digging me-3"></i>
        <span class="hide-on-collapse">Locais de obras</span>
      </a>

      <a href="#" class="sidebar-link text-decoration-none p-3">
        <i class="fa-solid fa-hammer me-3"></i>
        <span class="hide-on-collapse">Futuros Projetos</span>
      </a>
      <a href="#" class="sidebar-link text-decoration-none p-3">
        <i class="fas fa-gear me-3"></i>
        <span class="hide-on-collapse">Configurações</span>
      </a>
    </div>

    <div class="profile-section mt-auto p-4">
      <div class="d-flex align-items-center">
        <img src="image/oriPerfil.jpeg" style="height:60px" class="rounded-circle" alt="Profile">
        <div class="ms-3 profile-info">
          <h6 class="text-white mb-0">Douglas Campos</h6>
          <small class="text-light">Admin</small>
        </div>
      </div>
    </div>
  </nav>
<script>
  function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('collapsed');
  }
</script>
<style>
  :root {
    --sidebar-width: 280px;
    --sidebar-width-collapsed: 80px;
  }

  body {
    overflow-x: hidden;
  }

  .main-content {
    margin-left: var(--sidebar-width);
    width: calc(100% - var(--sidebar-width));
    background-color: #a0a3bd;
    min-height: 100vh;
    padding: 20px;
    transition: all 0.3s ease;
  }

  .sidebar.collapsed ~.main-content {
    margin-left: var(--sidebar-width-collapsed);
    width: calc(100% - var(--sidebar-width-collapsed));
  }

  .sidebar {
    width: var(--sidebar-width);
    height: 100vh;
    background: linear-gradient(135deg, #1a1c2e 0%, #16181f 100%);
    transition: all 0.3s ease;
  }

  .sidebar.collapsed {
    width: var(--sidebar-width-collapsed);
  }

  .sidebar-link {
    color: #a0a3bd;
    transition: all 0.2s ease;
    border-radius: 8px;
    margin: 4px 16px;
    white-space: nowrap;
    overflow: hidden;
  }

  .sidebar-link:hover {
    color: #ffffff;
    background: rgba(255, 255, 255, 0.1);
    transform: translateX(5px);
  }

  .sidebar-link.active {
    color: #ffffff;
    background: rgba(255, 255, 255, 0.1);
  }

  .logo-text {
    background: linear-gradient(45deg, #6b8cff, #8b9fff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    transition: opacity 0.3s ease;
  }

  .notification-badge {
    background: #ff6b6b;
    padding: 2px 6px;
    border-radius: 6px;
    font-size: 0.7rem;
  }

  .profile-section {
    border-top: 1px solid rgba(255, 255, 255, 0.1);
  }

  .main-content {
    margin-left: var(--sidebar-width);
    background-color: #f8f9fa;
    min-height: 100vh;
    padding: 20px;
    transition: all 0.3s ease;
  }

  .collapsed~.main-content {
    margin-left: var(--sidebar-width-collapsed);
  }

  .toggle-btn {
    position: absolute;
    right: -15px;
    top: 20px;
    background: white;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    border: none;
    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
    z-index: 100;
    cursor: pointer;
    transition: transform 0.3s ease;
  }

  .collapsed .toggle-btn {
    transform: rotate(180deg);
  }

  .collapsed .hide-on-collapse {
    opacity: 0;
    visibility: hidden;
    width: 0;
    margin: 0;
  }

  .collapsed .logo-text {
    opacity: 0;
  }

  .collapsed .profile-info {
    opacity: 0;
  }

  .collapsed .sidebar-link {
    text-align: center;
    padding: 1rem 0.5rem !important;
    margin: 4px;
    width: 60px;
    display: flex;
    justify-content:center
  }

  .collapsed .sidebar-link i {
    margin: 0 !important;
  }

  .profile-info {
    transition: opacity 0.2s ease;
  }
</style>
