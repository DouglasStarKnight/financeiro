<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Financeiro</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</head>

<body>
  <div class="d-flex">
    <nav class="sidebar d-flex flex-column flex-shrink-0 position-fixed">
      <button class="toggle-btn" onclick="toggleSidebar()">
        <i class="fas fa-chevron-left"></i>
      </button>

      <div class="p-4">
        <h4 class="logo-text fw-bold mb-0">Financeiro</h4>
        <p class="text-light small hide-on-collapse">Dashboard</p>
      </div>

      <div class="nav flex-column">
        <a href="#" class="sidebar-link active text-decoration-none p-3">
          <i class="fas fa-home me-3"></i>
          <span class="hide-on-collapse">inicio</span>
        </a>
        <a href="#" class="sidebar-link text-decoration-none p-3">
          <i class="fas fa-chart-bar me-3"></i>
          <span class="hide-on-collapse">Historico de pagamentos</span>
        </a>
        <a href="#" class="sidebar-link text-decoration-none p-3">
          <i class="fas fa-users me-3"></i>
          <span class="hide-on-collapse">usuarios</span>
        </a>

        <a href="#" class="sidebar-link text-decoration-none p-3">
          <i class="fas fa-box me-3"></i>
          <span class="hide-on-collapse">Produtos/Serviços</span>
        </a>
        <a href="#" class="sidebar-link text-decoration-none p-3">
          <i class="fas fa-gear me-3"></i>
          <span class="hide-on-collapse">Configurações</span>
        </a>
      </div>

      <div class="profile-section mt-auto p-4">
        <div class="d-flex align-items-center">
          <img src="oriPerfil.jpeg" style="height:60px" class="rounded-circle" alt="Profile">
          <div class="ms-3 profile-info">
            <h6 class="text-white mb-0">Douglas Campos</h6>
            <small class="text-light">Admin</small>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <div class="main-content">
    <div class="py-3 mb-5 bg-info bg-opacity-10 border border-info rounded text-center">
        <h4 class="fw-bold">Serviço do cara que fez o L</h4>
    </div>
    <div class="bg-body-secondary border rounded">
        
    </div>
  </div>
</body>
</html>

<script>
  function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    sidebar.classList.toggle('collapsed');
  }
</script>
<style>
  html,
  body {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
  }

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
  background-color: #f8f9fa;
  min-height: 100vh;
  padding: 20px;
  transition: all 0.3s ease;
}

.sidebar.collapsed ~ .main-content {
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
  }

  .collapsed .logo-text {
    opacity: 0;
  }

  .collapsed .profile-info {
    opacity: 0;
  }

  .collapsed .sidebar-link {
    text-align: center;
    padding: 1rem !important;
    margin: 4px 8px;
  }

  .collapsed .sidebar-link i {
    margin: 0 !important;
  }

  .profile-info {
    transition: opacity 0.2s ease;
  }
</style>
