<div class="navbar bg-base-100">
  <div class="navbar-start">
    <div class="dropdown">
      <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
        </svg>
      </div>
      <ul tabindex="0" class="menu menu-md dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-[60vw]">
        <li><a>About</a></li>
        <li>
          <details class="dropdown">
            <summary>Services</summary>
            <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-[60vw]">
              <li><a>Websites</a></li>
              <li><a>CRM</a></li>
              <li><a>LMS</a></li>
              <li><a>E-Commerce</a></li>
              <li><a>Mobile Apps</a></li>
              <li><a>Custom Software Development</a></li>
            </ul>
          </details>
        </li>
        <li><a>Contact</a></li>
      </ul>
    </div>
    <a class="btn btn-ghost text-xl">
      <img src="<?= $brand ?>" alt="brandname" height="50" width="50">
    </a>
  </div>
  <div class="navbar-center hidden lg:flex">
    <ul class="menu menu-horizontal px-1">
      <li><a>About</a></li>
      <li>
        <details class="dropdown">
          <summary>Services</summary>
          <ul class="p-2 shadow menu dropdown-content z-[1] bg-base-100 rounded-box w-[30vw]">
            <li><a>Websites</a></li>
            <li><a>CRM</a></li>
            <li><a>LMS</a></li>
            <li><a>E-Commerce</a></li>
            <li><a>Mobile Apps</a></li>
            <li><a>Custom Software Development</a></li>
          </ul>
        </details>
      </li>
      <li><a>Contact</a></li>
    </ul>
  </div>
  <div class="navbar-end">
    <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true): ?>
      <a class="btn bg-red-500 dark:bg-red-400 hover:bg-red-600 dark:text-white">Logout</a>
    <?php else: ?>
      <a class="btn bg-orange-500 dark:bg-orange-400 hover:bg-orange-600 dark:text-white">Login</a>
    <?php endif; ?>
  </div>
</div>