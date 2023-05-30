<div class="iconBar position-fixed" id="myNav">
  <a id="dashboardLink" href="{{ route('dashboard') }}"><i class="bi bi-house-door-fill"></i> <span class="tooltip">Dashboard</span></a>
  <a id="usersLink" href="{{ route('users.index') }}"><i class="fbi bi-people-fill"></i><span class="tooltip">Users</span></a>
  <a id="clientsLink" href="{{ route('clients.index') }}"><i class="bi bi-person-lines-fill"></i><span class="tooltip">Clients</span></a>
  <a id="organizationsLink" href="{{ route('organizations.index') }}"><i class="bi bi-door-open-fill"></i><span id="orga" class="tooltip">Organizations</span></a>
  <a id="projectsLink" href="{{ route('projects.index') }}"><i class="bi-briefcase-fill me-2"></i><span class="tooltip">Projects</span></a>
  <a id="tasksLink" href="{{ route('tasks.index') }}"><i class="bi bi-clipboard2-check-fill"></i><span class="tooltip">Tasks</span></a>
  <a id="rolesLink" href="{{ route('roles.index') }}"><i class="bi bi-incognito"></i><span class="tooltip">Roles</span></a>
</div>

<style>
  body { margin: 0; }
  .iconBar {
    width: 7%;
    background-color: @yield('background-color');
  }

  .iconBar a {
    display: block;
    text-align: center;
    padding: 20%;
    transition: all 0.5s ease;
    color: white;
    font-size: 236%;
    position: relative;
  }

  .iconBar a:hover {
    background-color: #ed7c7c;
    transform: scale(1.1);
    transition: all 0.5s ease;
    margin-top: 10px;
    margin-bottom: 10px;
  }

  .iconBar a:focus,
  .iconBar a.active {
    background-color: #204da7;
    border-block-end: 2px solid #F6E2E4;
  }

  .tooltip {
    font-size:medium;
    visibility: collapse;
    background-color: ;
    color: black;
    text-align: center;
    border-radius: 6px;
    padding: 5px;
    position: absolute;
    z-index: 1;
    bottom: 50%; 
    left: calc(100% + 45px); 
    opacity: 0;
    transition: opacity 0.3s;
    transform: translate(-50%, 50%); 
  }

  #orga{
  
    margin-left:10px;

  }

  .iconBar a:hover .tooltip {
    visibility: visible;
    opacity: 1;
  }
</style>



<script>
  document.addEventListener('DOMContentLoaded', function() {
    if (localStorage.getItem('focusedElementId')) {
      const focusedElementId = localStorage.getItem('focusedElementId');
      const focusedElement = document.getElementById(focusedElementId);

      if (focusedElement) {
        focusedElement.classList.add('active');
      }
    }

    const iconBarLinks = document.querySelectorAll('.iconBar a');
    iconBarLinks.forEach(function(link) {
      link.addEventListener('focus', function() {
        const focusedElementId = this.getAttribute('id');

        iconBarLinks.forEach(function(link) {
          link.classList.remove('active');
        });

        this.classList.add('active');

        if (focusedElementId) {
          localStorage.setItem('focusedElementId', focusedElementId);
        }
      });
    });
  });
</script>
